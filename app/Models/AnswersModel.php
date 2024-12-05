<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswersModel extends Model
{
    use HasFactory;

    protected $table = 'answers';

    protected $fillable = [
        'id_form',
        'id_question',
        'respuesta'
    ];
}
