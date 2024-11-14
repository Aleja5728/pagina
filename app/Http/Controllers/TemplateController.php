<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\SelectsModel;
use App\Models\FormModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TemplateController extends Controller
{
    public function index()
    {
        // Muestra las preguntas del formulario
        $preguntas = Questions::all();
        $selects = DB::table('selects')->get();

        return view('form-settings.views.template-page', compact('preguntas', 'selects'));
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

        // Crear el nuevo formulario
        $formulario = new FormModel();
        $formulario->titulo = $request->input('titulo');
        $formulario->descripcion = $request->input('descripcion');
        $formulario->save();

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

        // Retorna mensaje de satisfactorio si se guardo la pregunta correctamente
        return response()->json([
            'mensaje' => 'Pregunta guardada exitosamente',
            'pregunta' => $preguntas
        ], 201);
    }

    public function crearFormulario(Request $request)
    {
        // Crear el nuevo formulario
        $formulario = new FormModel();
        $formulario->titulo = $request->input('titulo');
        $formulario->descripcion = $request->input('descripcion');
        $formulario->save();

        // Asociar las preguntas seleccionadas con el formulario
        if ($request->has('preguntas')) {
            foreach ($request->input('preguntas') as $preguntaId) {
                $pregunta = Questions::find($preguntaId);

                // Aquí puedes guardar la relación entre el formulario y las preguntas, por ejemplo:
                $formulario->preguntas()->attach($preguntaId);

                // Si la pregunta tiene dependencias, guardarlas también
                if ($pregunta->preguntaDependiente) {
                    $dependencia = new SelectsModel();
                    $dependencia->id_question = $preguntaId;
                    $dependencia->opcion_condicional = $pregunta->preguntaDependiente->opcion_condicional;
                    $dependencia->save();
                }
            }
        }

        return redirect()->route('form-settings.template-page')->with('success', 'Formulario creado exitosamente.');
    }
}
