<?php

namespace App\Http\Controllers;

use App\Asamblea;
use App\Tequio;
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
            return redirect()->back()->with('danger','Es necesario proporcinar la cooperación');
        }
        $validacion = Validator::make($request->all(),[
            'ciudadanoId' => 'required',
        ]);
        if(!$validacion->passes()){
            return redirect()->back()->with('danger','Es necesario proporcinar el ciudadano');
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

    public function asamblea(Asamblea $asamblea)
    {
        if(!$asamblea->activa){
            return redirect()->route('asamblea.index')->with('warning','La asamblea '.$asamblea->tipo.' ya ha sido concluida, ahora puedes consultar las asistencias');
        }
        $ciudadanos = $asamblea->ciudadanos()->paginate(10);
        return view('lista.asamblea.asistencias', compact('asamblea', 'ciudadanos'));
    }

    public function tomarAsistenciaAsamblea(Request $request, Asamblea $asamblea)
    {
        if(is_null($asamblea)){
            return redirect()->back()->with('danger','Es necesario proporcinar la asamblea');
        }
        $validacion = Validator::make($request->all(),[
            'ciudadanoId' => 'required',
        ]);
        if(!$validacion->passes()){
            return redirect()->back()->with('danger','Es necesario proporcinar el ciudadano');
        } else {
            $ciudadanoId =   $request->get('ciudadanoId');
            $asistio = (boolean) $request->get('asistio');
            $asamblea->ciudadanos()->updateExistingPivot($ciudadanoId , ['asistio' => $asistio]);
            return redirect()->back()->with('success','Se ha tomado lista exitosamente');
        }
    }

    public function terminarAsamblea(Asamblea $asamblea)
    {
        if(!$asamblea->activa){
            return redirect()->route('asamblea.index')->with('warning','Esta asamblea ya ha sido concluida, ahora puedes consultar las asistencias');
        }
        $asamblea->activa = false;
        $asamblea->save();
        return redirect()->route('asamblea.index')->with('success','La asamblea ha sido concluida exitosamente');
    }

    public function tequio(Tequio $tequio)
    {
        if(!$tequio->activa){
            return redirect()->route('tequio.index')->with('warning','El tequio '.$tequio->tipo.' ya ha sido concluido, ahora puedes consultar las asistencias');
        }
        $ciudadanos = $tequio->ciudadanos()->paginate(10);
        return view('lista.tequio.asistencias', compact('tequio', 'ciudadanos'));
    }

    public function tomarAsistenciaTequio(Request $request, Tequio $tequio)
    {
        if(is_null($tequio)){
            return redirect()->back()->with('danger','Es necesario proporcinar el tequio');
        }
        $validacion = Validator::make($request->all(),[
            'ciudadanoId' => 'required',
        ]);
        if(!$validacion->passes()){
            return redirect()->back()->with('error','Es necesario proporcinar el ciudadano');
        } else {
            $ciudadanoId =   $request->get('ciudadanoId');
            $asistio = (boolean) $request->get('asistio');
            $tequio->ciudadanos()->updateExistingPivot($ciudadanoId , ['asistio' => $asistio]);
            return redirect()->back()->with('success','Se ha tomado lista exitosamente');
        }
    }

    public function terminarTequio(Tequio $tequio)
    {
        if(!$tequio->activa){
            return redirect()->route('tequio.index')->with('warning','Este tequio ya ha sido concluido, ahora puedes consultar las asistencias');
        }
        $tequio->activa = false;
        $tequio->save();
        return redirect()->route('tequio.index')->with('success','El tequio ha sido concluido exitosamente');
    }
}
