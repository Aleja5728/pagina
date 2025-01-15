<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Questions;

class QuestionSeeder extends Seeder
{

    // ['id_section' => , 'texto_de_pregunta' => '', 'tipo_de_pregunta' => '', 'visible' => ],

    public function run(): void
    {
        Questions::truncate();

        // Preguntas generales
        Questions::insert([
            // Preguntas de información personal
            [ 'texto_de_pregunta' => 'NOMBRES Y APELLIDOS COMPLETOS', 'tipo_de_pregunta' => 'text', 'visible' => true],
            [ 'texto_de_pregunta' => 'TIPO DE DOCUMENTO', 'tipo_de_pregunta' => 'select', 'visible' => true],
            [ 'texto_de_pregunta' => 'NÚMERO DE DOCUMENTO', 'tipo_de_pregunta' => 'number', 'visible' => true],
            [ 'texto_de_pregunta' => 'FECHA DE NACIMIENTO', 'tipo_de_pregunta' => 'date', 'visible' => true],
            [ 'texto_de_pregunta' => 'LUGAR DE NACIMIENTO', 'tipo_de_pregunta' => 'text', 'visible' => true],
            [ 'texto_de_pregunta' => 'TELÉFONO', 'tipo_de_pregunta' => 'number', 'visible' => true],
            [ 'texto_de_pregunta' => 'CORREO ELECTRÓNICO', 'tipo_de_pregunta' => 'email', 'visible' => true],
            [ 'texto_de_pregunta' => 'SELECCIONE EL RANGO DE EDAD EN EL QUE SE ENCUENTRA', 'tipo_de_pregunta' => 'select', 'visible' => true],
            [ 'texto_de_pregunta' => '¿CUÁL ES SU GÉNERO?', 'tipo_de_pregunta' => 'select', 'visible' => true],
            [ 'texto_de_pregunta' => 'SELECCIONE ALGÚN PUEBLO ÉTNICO O COMUNIDAD CAMPESINA AL QUE PERTENECE', 'tipo_de_pregunta' => 'select', 'visible' => true],
            [ 'texto_de_pregunta' => '¿CUÁL ES SU ESTADO CIVIL?', 'tipo_de_pregunta' => 'select', 'visible' => true],
            [ 'texto_de_pregunta' => 'SITUACIÓN DE VULNERABILIDAD', 'tipo_de_pregunta' => 'select', 'visible' => true],
            [ 'texto_de_pregunta' => 'INDIQUE SU NIVEL EDUCATIVO', 'tipo_de_pregunta' => 'select', 'visible' => true],

            // Preguntas de información familiar
            [ 'texto_de_pregunta' => 'NOMBRE DE ALGÚN FAMILIAR', 'tipo_de_pregunta' => 'text', 'visible' => true],
            [ 'texto_de_pregunta' => 'NÚMERO DE DOCUMENTO DE FAMILIAR', 'tipo_de_pregunta' => 'number', 'visible' => true],
            [ 'texto_de_pregunta' => 'PARENTESCO', 'tipo_de_pregunta' => 'text', 'visible' => true],
            [ 'texto_de_pregunta' => 'TELÉFONO DE FAMILIAR', 'tipo_de_pregunta' => 'number', 'visible' => true],

            // Preguntas de información de salud
            [ 'texto_de_pregunta' => '¿CÚAL ES SU PUNTAJE DE SISBÉN?', 'tipo_de_pregunta' => 'text', 'visible' => true],
            [ 'texto_de_pregunta' => '¿SE ENCUENTRA AFILIADO AL SISTEMA DE SALUD?', 'tipo_de_pregunta' => 'select', 'visible' => true],
            [ 'texto_de_pregunta' => 'EPS AFILIADA', 'tipo_de_pregunta' => 'text', 'visible' => true],

        ]);
        
         


    }
}
