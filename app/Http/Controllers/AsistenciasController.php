<?php

namespace App\Http\Controllers;

use App\Asamblea;
use App\Ciudadano;
use App\Cooperacion;
use App\Tequio;
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

    public function asamblea(Asamblea $asamblea)
    {
        if($asamblea->activa){
            return redirect()->route('asamblea.index')->with('warning','La asamblea '.$asamblea->tipo.' aún no conluye');
        }
        $ciudadanos = $asamblea->ciudadanos()->paginate(10);
        return view('lista.asamblea.asistidos', compact('asamblea', 'ciudadanos'));
    }

    public function ciudadanoAsamblea(Ciudadano $ciudadano)
    {
        $asambleas  = $ciudadano->asambleas()->paginate(10);
        return view('lista.asamblea.ciudadano', compact('asambleas', 'ciudadano'));
    }

    public function tequio(Tequio $tequio)
    {
        if($tequio->activa){
            return redirect()->route('tequio.index')->with('warning','El tequio '.$tequio->tipo.' aún no conluye');
        }
        $ciudadanos = $tequio->ciudadanos()->paginate(10);
        return view('lista.tequio.asistidos', compact('tequio', 'ciudadanos'));
    }

    public function ciudadanoTequio(Ciudadano $ciudadano)
    {
        $tequios  = $ciudadano->tequios()->paginate(10);
        return view('lista.tequio.ciudadano', compact('tequios', 'ciudadano'));
    }
}
