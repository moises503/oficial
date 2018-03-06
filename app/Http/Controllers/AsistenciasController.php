<?php

namespace App\Http\Controllers;

use App\Ciudadano;
use App\Cooperacion;
use Illuminate\Http\Request;

class AsistenciasController extends Controller
{
    public function cooperacion(Cooperacion $cooperacion)
    {
        if($cooperacion->activa){
            return redirect()->route('cooperacion.index')->with('warning','La cooperación '.$cooperacion->tipo.' aún no conluye');
        }
        $ciudadanos = $cooperacion->ciudadanos()->paginate(10);
        return view('lista.cooperacion.asistidos', compact('cooperacion', 'ciudadanos'));
    }

    public function ciudadanoCooperacion(Ciudadano $ciudadano)
    {
        $cooperaciones = $ciudadano->cooperaciones()->paginate(10);
        return view('lista.cooperacion.ciudadano', compact('cooperaciones', 'ciudadano'));
    }
}
