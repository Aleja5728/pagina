<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = 'questions';

    protected $fillable = [
        'texto_de_pregunta',
        'tipo_de_pregunta',
        'visible'
    ];


    // Relación many-to-many con Formulario
    public function formularios()
    {
        return $this->belongsToMany(FormModel::class, 'questionsforms', 'id_question', 'id_form');
    }

    // Relación con PreguntaDependiente
    public function dependencias()
    {
        return $this->hasMany(SelectsModel::class, 'id_question');
    }




    use HasFactory;
}
