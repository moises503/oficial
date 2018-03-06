<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asamblea extends Model
{
    protected $fillable = [
        'tipo', 'descripcion' , 'organiza' , 'fechaasamblea'
    ];

    public function ciudadanos()
    {
        return $this->belongsToMany(Ciudadano::class);
    }
}
