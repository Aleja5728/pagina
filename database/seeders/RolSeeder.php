<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{

    public function run(): void
    {
        Role::truncate();
        Permission::truncate();

        // Creación de roles
        $rol1 = Role::create(['name' => 'Administrador']);
        $rol2 = Role::create(['name' => 'Creador']);

        //     Ejecutar exclusivamente el seeder 
        //     php artisan db:seed --class=RolSeeder
        //     php artisan migrate:fresh --seed

        // Creación de permisos

        // Vistas de inicio, pagina de inicio y de configuración
        Permission::create(['name' => 'home-page'])->syncRoles([$rol1, $rol2]); // 1
        Permission::create(['name' => 'settings-view'])->syncRoles([$rol1, $rol2]); // 2 

        // Vista de configuración de usuarios
        Permission::create(['name' => 'usuarios'])->assignRole($rol1); // 3 
        Permission::create(['name' => 'usuarios.index'])->assignRole($rol1); // 4 
        Permission::create(['name' => 'usuarios.store'])->assignRole($rol1); // 5
        Permission::create(['name' => 'usuarios.create'])->assignRole($rol1); // 6
        Permission::create(['name' => 'usuarios.edit'])->assignRole($rol1); // 7 
        Permission::create(['name' => 'usuarios.show'])->assignRole($rol1); // 8 
        Permission::create(['name' => 'usuarios.update'])->assignRole($rol1); // 9 
        Permission::create(['name' => 'usuarios.destroy'])->assignRole($rol1); // 10 

    }
}
