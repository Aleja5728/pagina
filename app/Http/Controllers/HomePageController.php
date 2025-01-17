<?php

namespace App\Http\Controllers;

use App\Models\AnswersModel;
use App\Models\User;
use App\Models\Questions;
use App\Models\SelectsModel;
use App\Models\FormsAnswers;
use App\Models\Dependencies;
use App\Models\FormModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    // Función para mostrar la pagina de inicio
    public function index()
    {
        // Obtiene los registros de las tablas mencionadas
        $usuarios = User::all();
        $formulario = DB::table('forms')->get();
        $preguntasFormulario = DB::table('questionsforms')->get();
        $preguntas = DB::table('questions')->get();
        $preguntasDependientes = DB::table('selects')->get();

        // Se obtienen los formularios y se cuentan las respuestas que tiene cada uno
        $formularios = DB::table('forms')
            ->leftJoin('formsanswers', 'forms.id', '=', 'formsanswers.id_form')
            ->select('forms.titulo', DB::raw('COUNT(formsanswers.id) as total_respuestas'))
            ->groupBy('forms.id', 'forms.titulo')
            ->get();

        $dependencias = Dependencies::withCount('forms')->get();

        $totalFormularios = [
            'labels' => $dependencias->pluck('dependencia'),
            'data' => $dependencias->pluck('forms_count')
        ];

        $datos = [
            'labels' => $formularios->pluck('titulo'), // Nombre del formulario
            'data' => $formularios->pluck('total_respuestas'), // Total respuestas
        ];

        return view("auth.views.home-page", compact('usuarios', 'formulario', 'preguntasFormulario', 'preguntas', 'preguntasDependientes', 'datos', 'totalFormularios'));
    }

    // Función para guardar respuestas de formularios
    public function store(Request $request)
    {
        $request->validate([
            'id_form' => 'required|exists:forms,id',  // Valida que el formulario exista en la base de datos
            'respuesta' => 'required',
            'respuesta.*' => 'required'
        ]);

        $formularioId = $request->input('id_form');
        // Se asegura de que el formulario al que estan respondiendo, si exista correctamente en la base de datos
        $formulario = FormModel::find($formularioId);

        $conteoRespuestas = FormsAnswers::create([
            'id_form' => $formularioId,
        ]);

        // Recibe las respuestas ingresadas en cada pregunta 
        foreach ($request->input('respuesta') as $preguntaId => $respuesta) {


            // condición por si la pregunta es un array (selects, checkboxes)
            if (is_array($respuesta)) {
                foreach ($respuesta as $opcion) {

                    AnswersModel::create([
                        'id_form' => $formularioId,
                        'id_question' => $preguntaId,
                        'respuesta' => $opcion,
                    ]);
                }
            } else {

                AnswersModel::create([
                    'id_form' => $formularioId,
                    'id_question' => $preguntaId,
                    'respuesta' => $respuesta,
                ]);
            }
        }


        $totalRespuestas = FormsAnswers::where('id_form', $formularioId)->count();


        if (empty($request->input('respuesta'))) {
            return back()->withErrors(['respuesta' => 'No se proporcionaron respuestas.']);
        } else {
            return redirect('home-page');
        }

        // return redirect()->back()->with('success', 'Respuestas guardadas exitosamente');
    }

    public function show(Request $request)
    {
        return view("auth.views.settings-view");
    }
}
