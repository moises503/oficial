<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistenciacooperacione extends Model
{
    protected $fillable = [
        'asistencia', 'cooperacion_id', 'ciudadano_id'
    ];

    public function cooperaciones()
    {
   return $this->belongsTo('App\Cooperacion','cooperacion_id');
    }

   
   public function ciudadanos(){
    return $this->belongsTo('App\Ciudadano','ciudadano_id');
   }
}
