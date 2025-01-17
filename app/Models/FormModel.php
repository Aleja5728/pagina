<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormModel extends Model
{

    protected $table = 'forms';

    protected $fillable = [ 'dependencia',
    'titulo',
    'descripcion'];

    // Relación many-to-many con Pregunta
    public function preguntas()
    {
        return $this->belongsToMany(Questions::class, 'questionsforms', 'id_form', 'id_question');
    }

    public function formsDependencies()
    {
        return $this->hasMany(FormsDependencies::class, 'id_form');
    }

    use HasFactory;
}
