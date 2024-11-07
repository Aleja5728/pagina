<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\SelectsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TemplateController extends Controller
{
    public function index()
    {
        // Función para mostrar las preguntas que estan visibles en la base de datos
        $preguntas = Questions::where('visible', true)->get();
        $selects = DB::table('selects')->get();

        return view('form-settings.views.template-page', compact('preguntas', 'selects'));
    }

    // protected $fillable = ['id_section',
    // 'texto_de_pregunta', 
    // 'tipo_de_pregunta', 
    // 'visible'];
    public function guardar(Request $request){
        $usuario = Auth::user();
    
        $dependencia = 0;
    
        if ($usuario->dependencia === 'secretaria de salud') {
            $dependencia = 7;
        }
    
        $preguntas = new Questions();
        $preguntas->id_section = $dependencia;
        $preguntas->texto_de_pregunta = $request->input('texto_de_pregunta'); 
        $preguntas->tipo_de_pregunta = $request->input('tipo_de_pregunta');
        $preguntas->save();

        if($request->has('opcion')){
            foreach ($request->input('opcion') as $opcion) {
                $opcionPregunta = new SelectsModel();
                $opcionPregunta->id_question = $preguntas->id;
                $opcionPregunta->opcion = $opcion;
                $opcionPregunta->save();
        }
        }
        
        return response()->json([
            'mensaje' => 'Pregunta guardada exitosamente',
            'pregunta' => $preguntas
        ], 201);
    }
}
