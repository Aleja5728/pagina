<?php

namespace App\Http\Controllers;

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
        // Llama los registros de la tabla Questions con las preguntas principales 
        $preguntas = DB::table('questions')->get();

        // Llama los registros de la tabla Selects
        $selects = DB::table('selects')->get();


        // Se envían las preguntas principales y los select a la vista
        return view('form-settings.views.template-page', compact('preguntas', 'selects'));
    }

    // Función para guardar nuevas preguntas en la base de datos
    public function guardarPreguntas(Request $request)
    {


        $validated = $request->validate([
            'texto_de_pregunta' => 'required|string|max:255',
            'tipo_de_pregunta' => 'required|string|in:textarea,text,select,number,date,image,checkbox',
            'texto_selects' => 'nullable|array',
            'texto_selects.*' => 'string|max:255', // Cada opción debe ser una cadena válida
        ]);

        // Recibe pregunta y tipo de pregunta creadas con el drag and drop y las guarda en la tabla de preguntas
        $preguntas = new Questions($validated);

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

        try {
            // Validar los datos
            $validacionDeFormulario = $request->validate([
                'titulo' => 'required|string|max:255|unique:forms,titulo',
                'descripcion' => 'required|string',
            ]);

            $usuario = Auth::user();

            // Crear el nuevo formulario
            $formulario = new FormModel($validacionDeFormulario);
            $formulario->dependencia = $usuario->dependencia;
            $formulario->titulo = $request->input('titulo');
            $formulario->descripcion = $request->input('descripcion');
            if ($formulario->save()) {


                // Asociar preguntas seleccionadas al formulario con id_section
                if ($request->has('preguntas')) {
                    foreach ($request->input('preguntas') as $preguntaId) {
                        // Obtener la pregunta
                        $pregunta = Questions::find($preguntaId);
                        if ($pregunta) {

                            $formulario->preguntas()->attach($pregunta->id);
                        }
                    }
                }
                // Si se añaden preguntas nuevas
                if ($request->has('nuevas_preguntas')) {
                    foreach ($request->input('nuevas_preguntas') as $nuevaPregunta) {
                        $pregunta = Questions::create([

                            'texto_de_pregunta' => $nuevaPregunta['texto_de_pregunta'],
                            'tipo_de_pregunta' => $nuevaPregunta['tipo_de_pregunta'],
                            'visible' => $nuevaPregunta['visible'] ?? true,
                        ]);
                        $formulario->preguntas()->attach($pregunta->id);
                    }
                }
            }

            session()->flash('Exito', 'Formulario creado con éxito.');

            return redirect('home-page');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withErrors(['titulo' => 'El título ya se encuentra en uso'])
                ->withInput();
        }
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
