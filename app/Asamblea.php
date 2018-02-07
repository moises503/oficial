<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asamblea extends Model
{
    protected $fillable = [
        'tipo', 'descripcion' , 'organiza' , 'fechaasamblea'
    ];


    public function asistenciaasambleas()
    {
        return $this->hasMany('App\Asistenciaasamblea');
    }
}
