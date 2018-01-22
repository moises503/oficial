<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Asistenciaasamblea;

class AsistenciaasambleaController extends Controller
{

    public function index()
    {
        $asistenciaasambleas = Asistenciaasamblea::with('ciudadanos', 'asambleas')->get();
     
        return view('asistenciaasamblea.index',compact('asistenciaasambleas'));
    }


    public function create()
    {
        
        return view('asistenciaasamblea.create');
    }
    
    public function store(Request $request)
    {
            request()->validate([

            'asistencia' => 'required',
            'ciudadano_id'=> 'required',
            'asamblea_id'=> 'required',
            

        ]);
        Asistenciaasamblea::create($request->all());
        return redirect()->route('asistenciaasamblea.index')
                        ->with('success','Asistencia agregada correctamente correctamente');
    }

}
