<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tequio extends Model
{
    protected $fillable = [
        'tipo', 'descripcion' , 'organiza' , 'fechatequio'
    ];

    public function ciudadanos()
    {
        return $this->belongsToMany(Ciudadano::class)
            ->withPivot('asistio')
            ->withTimestamps();
    }
}
