<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooperacion extends Model
{
    protected $table = 'cooperaciones';

    protected $casts = [
        'activa' => 'boolean'
    ];

    protected $fillable = [
        'tipo', 'descripcion' , 'organiza' , 'cantidad', 'fechacooperacion'
    ];

    public function ciudadanos()
    {
        return $this->belongsToMany(Ciudadano::class)
            ->withPivot('asistio')
            ->withTimestamps();
    }
}
