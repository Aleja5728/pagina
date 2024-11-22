<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormModel extends Model
{

    protected $table = 'forms';

    protected $fillable = ['titulo',
                            'descripcion'];

                            // Relación con Sección
    public function secciones()
    {
        return $this->hasMany(Section::class, 'id_form');
    }

    // Relación many-to-many con Pregunta
    public function preguntas()
    {
        return $this->belongsToMany(Section::class, 'questionsforms', 'id_form', 'id_question')->withPivot('id_section')
        ->withTimestamps();
    }

    use HasFactory;
}
