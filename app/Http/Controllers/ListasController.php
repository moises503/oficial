<?php

namespace App\Http\Controllers;

use Validator;
use App\Cooperacion;
use App\CiudadanoCooperacion;
use Illuminate\Http\Request;

class ListasController extends Controller
{
    public function cooperacion(Cooperacion $cooperacion)
    {
        if(!$cooperacion->activa){
            return redirect()->route('cooperacion.index')->with('warning','La cooperación '.$cooperacion->tipo.' ya ha sido concluida, ahora puedes consultar las asistencias');
        }
        $ciudadanos = $cooperacion->ciudadanos()->paginate(10);
        return view('lista.cooperacion.asistencias', compact('cooperacion', 'ciudadanos'));
    }

    public function tomarAsistenciaCooperacion(Request $request, Cooperacion $cooperacion)
    {
        if(is_null($cooperacion)){
            return redirect()->back()->with('error','Es necesario proporcinar la cooperación');
        }
        $validacion = Validator::make($request->all(),[
            'ciudadanoId' => 'required',
        ]);
        if(!$validacion->passes()){
            return redirect()->back()->with('error','Es necesario proporcinar el ciudadano');
        } else {
            $ciudadanoId =   $request->get('ciudadanoId');
            $asistio = (boolean) $request->get('asistio');
            $cooperacion->ciudadanos()->updateExistingPivot($ciudadanoId , ['asistio' => $asistio]);
            return redirect()->back()->with('success','Se ha tomado lista exitosamente');
        }
    }

    public function terminarCooperacion(Cooperacion $cooperacion)
    {
        if(!$cooperacion->activa){
            return redirect()->route('cooperacion.index')->with('warning','Esta cooperación ya ha sido concluida, ahora puedes consultar las asistencias');
        }
        $cooperacion->activa = false;
        $cooperacion->save();
        return redirect()->route('cooperacion.index')->with('success','La cooperación ha sido concluida exitosamente');
    }
}
