<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DependentQuestion extends Model
{
    protected $table = 'dependentsquestions';

    protected $fillable = [
        'id_mainquestion',
        'condition',
        'id_dependentquestion'
    ];

    // mainQuestion() se refiere a la pregunta principal.
    // dependentQuestion() se refiere a la pregunta dependiente asociada.

    public function mainQuestion()
    {
        return $this->belongsTo(Questions::class, 'id_mainquestion');
    }

    public function dependentQuestion()
    {
        return $this->belongsTo(Questions::class, 'id_dependentquestion');
    }
    use HasFactory;
}
