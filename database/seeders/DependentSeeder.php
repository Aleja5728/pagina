<?php

namespace Database\Seeders;

use App\Models\DependentQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DependentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * ['id_mainquestion' => '175', 'condition' => 'PERSONA JURÍDICA', 'id_dependentquestion' => '176'],
     */
    public function run(): void
    {
        DependentQuestion::truncate();

        // Secretaría de gestión social
        DependentQuestion::insert([
            // Ha recibido ayuda al encontrarse en calle
            ['id_mainquestion' => '125', 'condition' => 'SI', 'id_dependentquestion' => '126'],
            ['id_mainquestion' => '125', 'condition' => 'SI', 'id_dependentquestion' => '127'],
            // Usted sabe si la alcaldia tiene programas para la atencion de habitantes de calle
            ['id_mainquestion' => '128', 'condition' => 'SI', 'id_dependentquestion' => '129'],
            // Utiliza esos servicios
            ['id_mainquestion' => '129', 'condition' => 'SI', 'id_dependentquestion' => '130'],
            // Su seguridad se ha visto afectada
            ['id_mainquestion' => '139', 'condition' => 'SI', 'id_dependentquestion' => '140'],
            // Ha participado en algún taller
            ['id_mainquestion' => '149', 'condition' => 'SI', 'id_dependentquestion' => '150'],
        ]);

        // Secretaría economica
        DependentQuestion::insert([
            // Tipo de constitucion
            ['id_mainquestion' => '175', 'condition' => 'PERSONA JURÍDICA', 'id_dependentquestion' => '176'],
            // A cual sector pertenece la empresa
            ['id_mainquestion' => '185', 'condition' => 'PRIMARIO O AGROPECUARIO - OBTIENE PRODUCTOS DIRECTAMENTE DE LA NATURALEZA SIN TRANSFORMAR', 'id_dependentquestion' => '186'],
            ['id_mainquestion' => '185', 'condition' => 'SECUNDARIO O INDUSTRIAL - TRANSFORMA MATERIAS PRIMAS EN PRODUCTOS TERMINADOS O SEMIELABORADOS', 'id_dependentquestion' => '187'],
            ['id_mainquestion' => '185', 'condition' => 'TERCIARIO O DE SERVICIOS - NO PRODUCE BIENES; SE ENFOCA EN LOS SERVICIOS', 'id_dependentquestion' => '188'],
            // Cuenta con maquinaria para el desarrollo de sus actividades
            ['id_mainquestion' => '190', 'condition' => 'SI', 'id_dependentquestion' => '191'],
            // Cuantos empleos directos genera
            ['id_mainquestion' => '192', 'condition' => '1', 'id_dependentquestion' => '193'],
            ['id_mainquestion' => '192', 'condition' => 'DE 2 A 3', 'id_dependentquestion' => '193'],
            ['id_mainquestion' => '192', 'condition' => 'DE 4 A 6', 'id_dependentquestion' => '193'],
            ['id_mainquestion' => '192', 'condition' => 'DE 7 A 10', 'id_dependentquestion' => '193'],
            ['id_mainquestion' => '192', 'condition' => 'MÁS DE 10', 'id_dependentquestion' => '193'],
            // Su empresa cuenta con registro mercantil
            ['id_mainquestion' => '198', 'condition' => 'SI', 'id_dependentquestion' => '199'],
            // Ha recibido apoyo de entidades
            ['id_mainquestion' => '203', 'condition' => 'SI', 'id_dependentquestion' => '204'],
            ['id_mainquestion' => '203', 'condition' => 'SI', 'id_dependentquestion' => '205'],
            // Pertenece a algun gremio
            ['id_mainquestion' => '206', 'condition' => 'SI', 'id_dependentquestion' => '207'],
            // Su empresa ha realizado alguna exportacion
            ['id_mainquestion' => '208', 'condition' => 'SI', 'id_dependentquestion' => '209'],
        ]);

        // Gestión del riesgo
        DependentQuestion::insert([
            // En l vivienda o barrio hay animales en condicion de vulnerabilidad
            ['id_mainquestion' => '219', 'condition' => 'SI', 'id_dependentquestion' => '220'],
            ['id_mainquestion' => '219', 'condition' => 'SI', 'id_dependentquestion' => '221'],
        ]);

        // Oficina de turismo
        DependentQuestion::insert([
            ['id_mainquestion' => '222', 'condition' => 'PRESTADOR DE SERVICIOS TURISTICOS', 'id_dependentquestion' => '223'],
            ['id_mainquestion' => '222', 'condition' => 'PRESTADOR DE SERVICIOS TURISTICOS', 'id_dependentquestion' => '224'],
            ['id_mainquestion' => '222', 'condition' => 'PRESTADOR DE SERVICIOS TURISTICOS', 'id_dependentquestion' => '225'],
            ['id_mainquestion' => '222', 'condition' => 'PRESTADOR DE SERVICIOS TURISTICOS', 'id_dependentquestion' => '226'],
            ['id_mainquestion' => '222', 'condition' => 'PRESTADOR DE SERVICIOS TURISTICOS', 'id_dependentquestion' => '227'],
            ['id_mainquestion' => '222', 'condition' => 'PRESTADOR DE SERVICIOS TURISTICOS', 'id_dependentquestion' => '228'],
            ['id_mainquestion' => '222', 'condition' => 'PRESTADOR DE SERVICIOS TURISTICOS', 'id_dependentquestion' => '229'],
            ['id_mainquestion' => '222', 'condition' => 'TURISTA', 'id_dependentquestion' => '230'],
            ['id_mainquestion' => '222', 'condition' => 'TURISTA', 'id_dependentquestion' => '231'],
            ['id_mainquestion' => '222', 'condition' => 'TURISTA', 'id_dependentquestion' => '232'],
            ['id_mainquestion' => '222', 'condition' => 'TURISTA', 'id_dependentquestion' => '233'],
            ['id_mainquestion' => '222', 'condition' => 'TURISTA', 'id_dependentquestion' => '234'],
            ['id_mainquestion' => '222', 'condition' => 'TURISTA', 'id_dependentquestion' => '235'],
        ]);

        // Secretaría de infraestructura
        DependentQuestion::insert([
            // Familiar es poblacion VCA o desplazado
            ['id_mainquestion' => '240', 'condition' => 'SI', 'id_dependentquestion' => '241'],
            ['id_mainquestion' => '240', 'condition' => 'SI', 'id_dependentquestion' => '242'],
            // Familiar mujer victima de violencia
            ['id_mainquestion' => '243', 'condition' => 'SI', 'id_dependentquestion' => '244'],
            // Familiar ha representado en algun deporte
            ['id_mainquestion' => '245', 'condition' => 'SI', 'id_dependentquestion' => '246'],
            ['id_mainquestion' => '245', 'condition' => 'SI', 'id_dependentquestion' => '247'],
            ['id_mainquestion' => '245', 'condition' => 'SI', 'id_dependentquestion' => '248'],
            // Familiar ha recibido subsidio de vivienda
            ['id_mainquestion' => '251', 'condition' => 'SI', 'id_dependentquestion' => '252'],
            ['id_mainquestion' => '251', 'condition' => 'SI', 'id_dependentquestion' => '253'],
            // Usted requiere mejoramiento de vivienda
            ['id_mainquestion' => '254', 'condition' => 'SI', 'id_dependentquestion' => '255'],
            ['id_mainquestion' => '254', 'condition' => 'SI', 'id_dependentquestion' => '256'],
            ['id_mainquestion' => '254', 'condition' => 'SI', 'id_dependentquestion' => '257'],
            ['id_mainquestion' => '254', 'condition' => 'SI', 'id_dependentquestion' => '258'],
            ['id_mainquestion' => '254', 'condition' => 'SI', 'id_dependentquestion' => '259'],
            ['id_mainquestion' => '254', 'condition' => 'SI', 'id_dependentquestion' => '260'],
            ['id_mainquestion' => '254', 'condition' => 'SI', 'id_dependentquestion' => '261'],
            ['id_mainquestion' => '254', 'condition' => 'SI', 'id_dependentquestion' => '262'],
            ['id_mainquestion' => '254', 'condition' => 'SI', 'id_dependentquestion' => '263'],
            // Usted requiere construccion de vivienda
            ['id_mainquestion' => '264', 'condition' => 'SI', 'id_dependentquestion' => '265'],
            ['id_mainquestion' => '264', 'condition' => 'SI', 'id_dependentquestion' => '266'],
            ['id_mainquestion' => '264', 'condition' => 'SI', 'id_dependentquestion' => '267'],
            ['id_mainquestion' => '264', 'condition' => 'SI', 'id_dependentquestion' => '268'],
            ['id_mainquestion' => '264', 'condition' => 'SI', 'id_dependentquestion' => '269'],
            ['id_mainquestion' => '264', 'condition' => 'SI', 'id_dependentquestion' => '270'],
            ['id_mainquestion' => '264', 'condition' => 'SI', 'id_dependentquestion' => '271'],
            ['id_mainquestion' => '264', 'condition' => 'SI', 'id_dependentquestion' => '272'],
            // Usted equiere compra de vivienda
            ['id_mainquestion' => '273', 'condition' => 'SI', 'id_dependentquestion' => '274'],
            ['id_mainquestion' => '273', 'condition' => 'SI', 'id_dependentquestion' => '275'],
            ['id_mainquestion' => '273', 'condition' => 'SI', 'id_dependentquestion' => '276'],
        ]);
    }
}
