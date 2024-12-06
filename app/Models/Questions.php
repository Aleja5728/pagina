<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = 'questions';

    protected $fillable = [
        'id_section',
        'texto_de_pregunta',
        'tipo_de_pregunta',
        'visible'
    ];

    // Relación con Sección
    public function seccion()
    {
        return $this->belongsTo(Section::class, 'id_section');
    }

    // Relación many-to-many con Formulario
    public function formularios()
    {
        return $this->belongsToMany(FormModel::class, 'questionsforms', 'id_question', 'id_form')->withPivot('id_section');
    }

    // Relación con PreguntaDependiente
    public function dependencias()
    {
        return $this->hasMany(SelectsModel::class, 'id_question');
    }




    use HasFactory;
}
