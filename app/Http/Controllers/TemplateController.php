<?php

namespace App\Http\Controllers;

use App\Models\DependentQuestion;
use App\Models\Questions;
use App\Models\SelectsModel;
use App\Models\FormModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\form;

class TemplateController extends Controller
{
    // Función para llamar a la página de la plantilla
    public function index()
    {
        // Llama los registros de la tabla Questions con las preguntas principales juntos con las dependientes 
        $preguntas = Questions::with('dependents.dependentQuestion')->get();

        // Llama los registros de la tabla Selects
        $selects = DB::table('selects')->get();

        // Encuentra los id de las preguntas dependientes
        // Con la función flatMap se recorren todas las preguntas y se extrae el id de las preguntas dependientes con Pluck, se genera una lista única de id
        $dependientesIds = $preguntas->flatMap(function ($pregunta) {
            return $pregunta->dependents->pluck('id_dependentquestion');
        });

        // Se excluyen todas las preguntas cuyo id este en la lista de id dependientes 
        $preguntasPrincipales = $preguntas->reject(function ($pregunta) use ($dependientesIds) {
            return $dependientesIds->contains($pregunta->id);
        });

        // Se seleccionan unicamente las preguntas que son dependientes 
        $preguntasDependientes = $preguntas->filter(function ($pregunta) use ($dependientesIds) {
            return $dependientesIds->contains($pregunta->id);
        });

        // Se envían las preguntas principales, dependientes y los select a la vista
        return view('form-settings.views.template-page', compact('preguntasPrincipales', 'preguntasDependientes', 'selects'));
    }

    // Función para guardar nuevas preguntas en la base de datos
    public function guardarPreguntas(Request $request)
    {
        $usuario = Auth::user();

        $dependencia = 0;

        // Asignación de id de dependencia
        if ($usuario->dependencia === 'secretaria de salud') {
            $dependencia = 7;
        } elseif (($usuario->dependencia === 'secretaria de planeacion')) {
            $dependencia = 7;
        } elseif (($usuario->dependencia === 'secretaria de planeacion')) {
            $dependencia = 8;
        } elseif (($usuario->dependencia === 'secretaria administrativa')) {
            $dependencia = 9;
        } elseif (($usuario->dependencia === 'secretaria de la mujer')) {
            $dependencia = 10;
        } elseif (($usuario->dependencia === 'secretaria de gestion social')) {
            $dependencia = 11;
        } elseif (($usuario->dependencia === 'secretaria de cultura')) {
            $dependencia = 12;
        } elseif (($usuario->dependencia === 'secretaria de infraestructura')) {
            $dependencia = 13;
        } elseif (($usuario->dependencia === 'secretaria de desarrollo')) {
            $dependencia = 14;
        } elseif (($usuario->dependencia === 'oficina gestion del riesgo')) {
            $dependencia = 15;
        } elseif (($usuario->dependencia === 'oficina de turismo')) {
            $dependencia = 16;
        }

        // Recibe pregunta y tipo de pregunta creadas con el drag and drop y las guarda en la tabla de preguntas
        $preguntas = new Questions();
        $preguntas->id_section = $dependencia;
        $preguntas->texto_de_pregunta = $request->input('texto_de_pregunta');
        $preguntas->tipo_de_pregunta = $request->input('tipo_de_pregunta');
        $preguntas->save();

        // Recibe opciones de las preguntas dependientes y las guarda en la tabla de selects con el id de la pregunta
        if ($request->has('texto_selects')) {
            foreach ($request->input('texto_selects') as $opcion) {
                $opcionPregunta = new SelectsModel();
                $opcionPregunta->id_question = $preguntas->id;
                $opcionPregunta->texto_selects = $opcion;
                $opcionPregunta->save();
            }
        }

    }

    // Función para crear formulario dependiendo los cambios realizados en la plantilla
    public function crearFormulario(Request $request)
    {

        // Validar los datos
        $validacionDeFormulario = $request->validate([
            'titulo' => 'required|string|max:255|unique:forms,titulo',
            'descripcion' => 'required|string',
        ]);


        $usuario = Auth::user();

        $dependencia = 0;

        // Asignación de id de dependencia
        if ($usuario->dependencia === 'secretaria de salud') {
            $dependencia = 7;
        } elseif (($usuario->dependencia === 'secretaria de planeacion')) {
            $dependencia = 7;
        } elseif (($usuario->dependencia === 'secretaria de planeacion')) {
            $dependencia = 8;
        } elseif (($usuario->dependencia === 'secretaria administrativa')) {
            $dependencia = 9;
        } elseif (($usuario->dependencia === 'secretaria de la mujer')) {
            $dependencia = 10;
        } elseif (($usuario->dependencia === 'secretaria de gestion social')) {
            $dependencia = 11;
        } elseif (($usuario->dependencia === 'secretaria de cultura')) {
            $dependencia = 12;
        } elseif (($usuario->dependencia === 'secretaria de infraestructura')) {
            $dependencia = 13;
        } elseif (($usuario->dependencia === 'secretaria de desarrollo')) {
            $dependencia = 14;
        } elseif (($usuario->dependencia === 'oficina gestion del riesgo')) {
            $dependencia = 15;
        } elseif (($usuario->dependencia === 'oficina de turismo')) {
            $dependencia = 16;
        }


        // Crear el nuevo formulario
        $formulario = new FormModel($validacionDeFormulario);
        $formulario->titulo = $request->input('titulo');
        $formulario->descripcion = $request->input('descripcion');
        if($formulario->save()){


        // Asociar preguntas seleccionadas al formulario con id_section
        if ($request->has('preguntas')) {
            foreach ($request->input('preguntas') as $preguntaId) {
                // Obtener la pregunta
                $pregunta = Questions::find($preguntaId);
                
                // Si la pregunta tiene sección, asociarla con el formulario
                if ($pregunta) {

                    $idSection = $pregunta->id_section ?? $dependencia;
                    // Asociar la pregunta al formulario incluyendo el id_section

                    $formulario->preguntas()->attach($preguntaId, ['id_section' => $idSection]);
                }
            }
        }
        // Si se añaden preguntas nuevas
        if ($request->has('nuevas_preguntas')) {
            foreach ($request->input('nuevas_preguntas') as $nuevaPregunta) {
                $pregunta = Questions::create([
                    'id_section' => $dependencia,
                    'texto_de_pregunta' => $nuevaPregunta['texto_de_pregunta'],
                    'tipo_de_pregunta' => $nuevaPregunta['tipo_de_pregunta'],
                    'visible' => $nuevaPregunta['visible'] ?? true,
                ]);

                $formulario->preguntas()->attach($pregunta->id);
            }
        }
    }

        // dd($request->all());
        // dd($request->input('preguntas'));
        // dd($formulario);
        
        return redirect()->route('home-page');
    }

    public function show($id)
    {

        $nombre = FormModel::find($id);

        $formulario = DB::table('forms')->get();
        $preguntasFormulario = DB::table('questionsforms')->get();
        $preguntas = DB::table('questions')->get();
        $preguntasDependientes = DB::table('selects')->get();


        return view('form-settings.views.forms', compact('formulario', 'preguntasFormulario', 'preguntas', 'preguntasDependientes', 'nombre'));
    }
}
