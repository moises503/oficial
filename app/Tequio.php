<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tequio extends Model
{
    protected $fillable = [
        'tipo', 'descripcion' , 'organiza' , 'fechatequio'
    ];
}
