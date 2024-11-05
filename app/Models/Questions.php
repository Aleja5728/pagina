<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = 'questions';

    protected $fillable = ['id_section',
                            'texto_de_pregunta', 
                            'tipo_de_pregunta', 
                            'visible'];

    use HasFactory;
}
