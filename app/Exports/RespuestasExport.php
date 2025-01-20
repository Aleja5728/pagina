<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RespuestasExport implements FromView
{
    protected $formularioId;

    public function __construct($formularioId)
    {
        $this->formularioId = $formularioId;
    }

    public function view(): View
    {
        
        $formulario = DB::table('forms')
            ->where('id', $this->formularioId)
            ->first();
    
        
        $preguntasFormulario = DB::table('questionsforms')
            ->where('id_form', $this->formularioId)
            ->get();
    
        $idsPreguntas = $preguntasFormulario->pluck('id_question');
    
        
        $preguntas = DB::table('questions')
            ->whereIn('id', $idsPreguntas)
            ->get();
    
        
        $respuestas = DB::table('answers')
            ->where('id_form', $this->formularioId)
            ->get();
    
        // Encabezados del archivo
        $encabezados = $preguntas->pluck('texto_de_pregunta')->toArray();
        $data = [$encabezados]; 
    
        // Se dividen las respuestas en bloques basados en el numero de preguntas de cada formulario
        $respuestasPorRegistro = $respuestas->chunk($preguntas->count());
    
        
        foreach ($respuestasPorRegistro as $registroRespuestas) {
            $fila = [];
    
            
            foreach ($preguntas as $pregunta) {
            
                $respuesta = $registroRespuestas->firstWhere('id_question', $pregunta->id);
    
                
                $fila[] = $respuesta ? $respuesta->respuesta : '';
            }
    
            
            $data[] = $fila;
        }
    
        
        return view('exports.answers', compact('formulario', 'data'));
    }
    

    
    
    
}

