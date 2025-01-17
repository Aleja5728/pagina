<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormsDependencies extends Model
{
    use HasFactory;

    protected $table = 'forms_dependencies';

    protected $fillable = [
        'id_form',
        'id_dependencia'
    ];

     // Definimos la relación con el modelo FormModel (Formulario)
     public function formulario()
     {
         return $this->belongsTo(FormModel::class, 'id_form');
     }
 
     // Definimos la relación con el modelo Dependencie (Dependencia)
     public function dependencia()
     {
         return $this->belongsTo(Dependencies::class, 'id_dependencia');
     }
}
