<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooperacione extends Model
{
    protected $fillable = [
        'tipo', 'descripcion' , 'organiza' , 'cantidad', 'fechacooperacion'
    ];
}
