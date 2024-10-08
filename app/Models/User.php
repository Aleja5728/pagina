<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory;
    use HasRoles;

    protected $table = 'usuarios';

    protected $fillable = [
        'email','nombre', 'apellido', 'numero_documento', 'genero', 'telefono',
        'dependencia', 'tipo_funcionario', 'cargo', 'rol', 'foto_perfil', 'password'
    ];

    protected $hidden = [
        'password', 'cargo', 'token'
    ];
    
}
