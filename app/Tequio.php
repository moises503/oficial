<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tequio extends Model
{
    protected $fillable = [
        'tipo', 'descripcion' , 'organiza' , 'fechatequio'
    ];

    
    public function asistenciatequio()
    {
        //return $this->belongsTo('App\Ciudadano','ciudadano_id');
        return $this->hasMany(Asistenciatequio::class);
    }
}
