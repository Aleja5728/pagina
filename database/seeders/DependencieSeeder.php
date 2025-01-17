<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dependencies;

class DependencieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dependencies::truncate();

        Dependencies::insert([
            ['dependencia' => 'despacho alcalde'],
            ['dependencia' => 'secretaria administrativa'],
            ['dependencia' => 'secretaria de agricultura y ambiente'],
            ['dependencia' => 'secretaria de cultura'],
            ['dependencia' => 'secretaria de desarrollo economico y competitividad'],
            ['dependencia' => 'secretaria de educacion'],
            ['dependencia' => 'secretaria de gabinete y buen gobierno'],
            ['dependencia' => 'secretaria de gestion social'],
            ['dependencia' => 'secretaria de gobierno, seguridad y convivencia'],
            ['dependencia' => 'secretaria de hacienda'],
            ['dependencia' => 'secrertaria de infraestructura'],
            ['dependencia' => 'secretaria de mujer y gobierno'],
            ['dependencia' => 'secretaria de movilidad'],
            ['dependencia' => 'secretaria de planeacion'],
            ['dependencia' => 'secretaria de salud'],
            ['dependencia' => 'secretaria juridica'],
        ]);
    }
}
