<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
    protected $fillable = [
        'nombre', 'parentesco' , 'fechanacimiento' , 'estadocivil', 'ocupacion', 'resideenpoblacion', 'ciudadano_id'
    ];


    public function ciudadano()
    {
        //return $this->belongsTo('App\Ciudadano','ciudadano_id');
        return $this->belongsTo(Ciudadano::class);
    }
}
