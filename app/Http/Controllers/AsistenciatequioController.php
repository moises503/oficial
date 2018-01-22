<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Asistenciatequio;

class AsistenciatequioController extends Controller
{
    public function index()
    {
        $asistenciatequios = Asistenciatequio::with('ciudadanos', 'tequios')->get();
     
        return view('asistenciatequio.index',compact('asistenciatequios'));
    }


    public function create()
    {
        
        return view('asistenciatequio.create');
    }
    
    public function store(Request $request)
    {
            request()->validate([

            'asistencia' => 'required',
            'ciudadano_id'=> 'required',
            'tequio_id'=> 'required',
            

        ]);
        Asistenciatequio::create($request->all());
        return redirect()->route('asistenciatequio.index')
                        ->with('success','Asistencia agregada correctamente correctamente');
    }
}
