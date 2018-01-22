<?php

namespace App\Http\Controllers;

use App\Familiar;
use App\Ciudadano;
use Illuminate\Http\Request;

class FamiliarController extends Controller
{
    public function index()
    {
        $familiares = Familiar::with('ciudadano')->get();
     
        return view('familiar.index',compact('familiares'));
    }

    public function agregarFamiliarACiudadano(Ciudadano $ciudadano)
    {
        return view('familiar.create', compact('ciudadano'));
    }

    public function create()
    {
        $ciudadanos = Ciudadano::pluck('nombre', 'id');
        return view('familiar.create', compact('ciudadanos'));
    }
    
    public function store(Request $request)
    {
        request()->validate([
            'nombre' => 'required',
            'parentesco',
            'fechanacimiento' => 'required',
            'estadocivil' ,
            'ocupacion', 
            'resideenpoblacion',
            'fechadenoresidir',
            'ciudadano_id'=> 'required',
        ]);
        $ciudadano = Ciudadano::find($request->get('ciudadano_id'));
        $ciudadano->familiares()->create($request->all());
        return redirect()->route('familiar.index')
                        ->with('success','Familiar agregado correctamente');
    }
}
