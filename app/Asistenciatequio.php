<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistenciatequio extends Model
{
    protected $fillable = [
        'asistencia', 'ciudadano_id' , 'tequio_id'
    ];

    public function tequios()
    {
    //return $this->belongsTo('App\Tequio','tequio_id');
    return $this->belongsTo(Tequio::class);
    }

   
   public function ciudadanos(){
    //return $this->belongsTo('App\Ciudadano','ciudadano_id');
    return $this->belongsTo(Ciudadano::class);
   }
}
