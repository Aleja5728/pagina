<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormsAnswers extends Model
{
    use HasFactory;

    protected $table = 'formsanswers';

    protected $fillable = ['id_form'];
}
