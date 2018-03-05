<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudadano extends Model
{
    protected $fillable = [
        'nombre', 'lugarnacimiento', 'fechanacimiento', 'calledomicilio',
        'numerodomicilio' ,  'residencia', 'sexo',
        'lenguamaterna',  'ocupacion', 'gradoestudios',
        'estadocivil', 'fechacasado', 'servicioagua', 'nombretomaagua',
        'serviciosalud', 'serviciopanteon', 'nombreresponsable',
        'serviciodrenaje', 'servicioenergia'
    ];

    public function familiares()
    {
        return $this->hasMany(Familiar::class);
    }


}
