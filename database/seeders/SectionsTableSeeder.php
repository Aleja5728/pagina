<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Section;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Section::truncate();
        // Secciones en las cuales están divididas las preguntas
        Section::insert([
            ['nombre_seccion' => 'Informacion personal'], // 1
            ['nombre_seccion' => 'Informacion familiar'], // 2
            ['nombre_seccion' => 'Informacion de salud'], // 3
            ['nombre_seccion' => 'Informacion de vivienda'], // 4
            ['nombre_seccion' => 'Informacion economica'], // 5
            ['nombre_seccion' => 'Otra informacion'], // 6
            ['nombre_seccion' => 'Secretaria de salud'], // 7
            ['nombre_seccion' => 'Secretaria de planeacion'], // 8
            ['nombre_seccion' => 'Secretaria administrativa'],  // 9
            ['nombre_seccion' => 'Secretaria de la mujer'], // 10
            ['nombre_seccion' => 'Secretaria de gestion social'], // 11
            ['nombre_seccion' => 'Secretaria de cultura'], // 12
            ['nombre_seccion' => 'Secretaria de infraestructura'], // 13
            ['nombre_seccion' => 'Secretaria de desarrollo'], // 14
            ['nombre_seccion' => 'Oficina gestion del riesgo'], // 15
            ['nombre_seccion' => 'Oficina de turismo'] // 16
        ]);
    }
}
