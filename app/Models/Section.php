<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'sections';

    protected $fillable = ['id_form', 'nombre_seccion'];

    // Relación con Formulario
    public function formulario()
    {
        return $this->belongsTo(FormModel::class, 'id_form');
    }

    // Relación con Pregunta
    public function preguntas()
    {
        return $this->hasMany(FormModel::class, 'id_seccion');
    }

    use HasFactory;
}
