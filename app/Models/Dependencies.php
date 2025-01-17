<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependencies extends Model
{
    use HasFactory;

    protected $table = 'dependencies';

    protected $fillable = ['dependencia'];

    public function usuarios()
    {
        return $this->hasMany(User::class, 'id_dependencia');
    }

    public function forms()
    {
        return $this->hasMany(FormsDependencies::class, 'id_dependencia');
    }
}
