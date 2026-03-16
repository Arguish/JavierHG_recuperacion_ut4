<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $fillable = [
        'titulo',
        'descripcion',
        'prioridad',
        'tecnico',
    ];
}
