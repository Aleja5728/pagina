<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectsModel extends Model
{
    use HasFactory;

    protected $table = 'selects';

    protected $fillable = ['id_question', 'opcion'];

    // Relación con Pregunta
    public function pregunta()
    {
        return $this->belongsTo(Questions::class, 'id_question');
    }

}
