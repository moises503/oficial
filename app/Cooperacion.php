<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooperacion extends Model
{
    protected $table = 'cooperaciones';

    protected $fillable = [
        'tipo', 'descripcion' , 'organiza' , 'cantidad', 'fechacooperacion'
    ];
}
