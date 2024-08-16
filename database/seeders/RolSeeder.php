<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{

    public function run(): void
    {
        // Creación de roles
        $rol1 = Role::create(['name' => 'Administrador']);
        $rol2 = Role::create(['name' => 'Creador']);

        // Creación de permisos
        // Vista de configuración de usuarios
        Permission::create(['name' => 'usuarios']);
        Permission::create(['name' => 'usuarios.index']);
        Permission::create(['name' => 'usuarios.create']);
        Permission::create(['name' => 'usuarios.edit']);
        Permission::create(['name' => 'usuarios.modificar']);
    }
}
