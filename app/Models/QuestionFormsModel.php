<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionFormsModel extends Model
{
    use HasFactory;

    protected $table = 'questionsforms'; // Nombre de la tabla pivote

    protected $fillable = [
        'id_form',
        'id_question',
    ];
}
