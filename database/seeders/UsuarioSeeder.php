<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::truncate();
        User::create([
            'nombre' => 'Gabriela',
            'apellido' => 'Rodríguez',
            'numero_documento' => '100351245',
            'genero' => 'femenino',
            'telefono' => '3018451243',
            'email' => 'gabirodriguez24@hotmail.com',
            'dependencia' => 'secretaria de educacion',
            'tipo_funcionario' => 'contratista',
            'rol' => 'Administrador',
            'cargo' => 'pasante',
            'foto_perfil' => '',
            'password' => bcrypt('clave')
        ])->assignRole('Administrador');

        User::create([
            'nombre' => 'Luis',
            'apellido' => 'Romero',
            'numero_documento' => '61435412',
            'genero' => 'masculino',
            'telefono' => '3152465351',
            'email' => 'LuisRome@hotmail.com',
            'dependencia' => 'despacho alcaldia',
            'tipo_funcionario' => 'planta',
            'rol' => 'Creador',
            'cargo' => 'pasante',
            'foto_perfil' => '',
            'password' => bcrypt('ejemplo')
        ])->assignRole('Creador');
    }
}
