<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistenciaasamblea extends Model
{
    protected $fillable = [
        'asistencia', 'asamblea_id', 'ciudadano_id'
    ];


        public function asambleas()
        {
        return $this->belongsTo('App\Asamblea','asamblea_id');
        }

       
       public function ciudadanos(){
        return $this->belongsTo('App\Ciudadano','ciudadano_id');
       }
}
