<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudadano extends Model
{
    protected $fillable = [
        'nombre', 'lugarnacimiento', 'fechanacimiento', 'calledomicilio',
        'numerodomicilio' ,  'residencia', 'sexo',
        'lenguamaterna',  'ocupacion', 'gradoestudios',
        'estadocivil', 'fechacasado', 'fechaciudadano','servicioagua', 'nombretomaagua',
        'serviciosalud', 'serviciopanteon', 'nombreresponsable',
        'serviciodrenaje', 'servicioenergia'
    ];

    public function familiares()
    {
        return $this->hasMany(Familiar::class);
    }

    public function asambleas()
    {
        return $this->belongsToMany(Asamblea::class)
            ->withPivot('asistio')
            ->withTimestamps();
    }

    public function cooperaciones()
    {
        return $this->belongsToMany(Cooperacion::class)
            ->withPivot('asistio')
            ->withTimestamps();
    }

    public function tequios()
    {
        return $this->belongsToMany(Tequio::class)
            ->withPivot('asistio')
            ->withTimestamps();
    }
}
