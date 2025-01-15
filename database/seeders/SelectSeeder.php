<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SelectsModel;

class SelectSeeder extends Seeder
{
    
    // ['id_question' => , 'texto_selects' => ''],
    
    public function run(): void
    {
        SelectsModel::truncate();

        // Preguntas generales
        SelectsModel::insert([
            // Información personal    
                // Tipo de documento
                ['id_question' => 2, 'texto_selects' => 'RC - REGISTRO CIVIL',],
                ['id_question' => 2, 'texto_selects' => 'TI - TARJETA DE IDENTIDAD',],
                ['id_question' => 2, 'texto_selects' => 'CC - CÉDULA DE CIUDADANÍA',],
                ['id_question' => 2, 'texto_selects' => 'CC - CÉDULA DE EXTRANJERÍA',],
                ['id_question' => 2, 'texto_selects' => 'PS - PASAPORTE',],
                ['id_question' => 2, 'texto_selects' => 'MS - MENOR SIN IDENTIFICACIÓN',],
                ['id_question' => 2, 'texto_selects' => 'AS - ADULTO SIN IDENTIFICACIÓN',],
                // Rango de edad
                ['id_question' => 8, 'texto_selects' => 'JÓVEN: 18 - 28 AÑOS'],
                ['id_question' => 8, 'texto_selects' => 'ADULTEZ: 29 - 59 AÑOS'],
                ['id_question' => 8, 'texto_selects' => 'PERSONA MAYOR: 60 - 79 AÑOS'],
                ['id_question' => 8, 'texto_selects' => 'OCTOGENARIO: 80 - 89 AÑOS'],
                ['id_question' => 8, 'texto_selects' => 'NONAGENARIO: 90 - 99 AÑOS'],
                ['id_question' => 8, 'texto_selects' => 'CENTENARIOS: MÁS DE 100 AÑOS'],
                ['id_question' => 8, 'texto_selects' => 'PREFIERO NO DECIRLO'],
                // Genero
                ['id_question' => 9, 'texto_selects' => 'MASCULINO'],
                ['id_question' => 9, 'texto_selects' => 'FEMENINO'],
                ['id_question' => 9, 'texto_selects' => 'INTERSEXUAL'],
                ['id_question' => 9, 'texto_selects' => 'PREFIERO NO DECIRLO'],
                // Etnia o comunidad
                ['id_question' => 10, 'texto_selects' => 'PUEBLO INDÍGENA'],
                ['id_question' => 10, 'texto_selects' => 'PUEBLO NEGRO'],
                ['id_question' => 10, 'texto_selects' => 'PUEBLO AFROCOLOMBIANO'],
                ['id_question' => 10, 'texto_selects' => 'PUEBLO RAIZAL'],
                ['id_question' => 10, 'texto_selects' => 'PUEBLO PALENQUERO'],
                ['id_question' => 10, 'texto_selects' => 'PUEBLO BROM O GITANO'],
                ['id_question' => 10, 'texto_selects' => 'COMUNIDAD CAMPESINA'],
                ['id_question' => 10, 'texto_selects' => 'PREFIERO NO DECIRLO'],
                // Estado civil
                ['id_question' => 11, 'texto_selects' => 'SOLTERO(A)'],
                ['id_question' => 11, 'texto_selects' => 'CASADO(A)'],
                ['id_question' => 11, 'texto_selects' => 'VIUDO(A)'],
                ['id_question' => 11, 'texto_selects' => 'SEPARADO(A)'],
                ['id_question' => 11, 'texto_selects' => 'UNIÓN LIBRE'],
                // Situación de vulnerabilidad
                ['id_question' => 12, 'texto_selects' => 'MADRE CABEZA DE FAMILIA'],
                ['id_question' => 12, 'texto_selects' => 'DISCAPACIDAD'],
                ['id_question' => 12, 'texto_selects' => 'TRABAJO SEXUAL'],
                ['id_question' => 12, 'texto_selects' => 'POBLACIÓN MIGRANTE'],
                ['id_question' => 12, 'texto_selects' => 'VICTIMA DEL CONFLICTO ARMADO'],
                ['id_question' => 12, 'texto_selects' => 'OTROS'],
                // Nivel educativo
                ['id_question' => 13, 'texto_selects' => 'SIN ESCOLARIDAD'],
                ['id_question' => 13, 'texto_selects' => 'PRIMARIA'],
                ['id_question' => 13, 'texto_selects' => 'SECUNDARIA (BACHILLERATO)'],
                ['id_question' => 13, 'texto_selects' => 'ESTUDIANTE UNIVERSITARIO'],
                ['id_question' => 13, 'texto_selects' => 'PROFESIONAL UNIVERSITARIO'],
                ['id_question' => 13, 'texto_selects' => 'POSTGRADO (ESPECIALIZACIÓN, MAESTRÍA Y DOCTORADO)'],
                ['id_question' => 13, 'texto_selects' => 'PREFIERO NO DECIRLO'],

            // Información de salud
                // Se encuentra afiliado al sistema de salud
                ['id_question' => 19, 'texto_selects' => 'SI'],
                ['id_question' => 19, 'texto_selects' => 'NO'],
                

        ]);

    }
}
