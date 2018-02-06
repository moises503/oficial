<?php

namespace App\Http\Controllers;

use App\Asistenciacooperacione;

use Illuminate\Http\Request;

class AsistenciacooperacioneController extends Controller
{
    public function index()
    {
        $asistenciacooperaciones = Asistenciacooperacione::with('ciudadanos', 'cooperaciones')->get();
     
        return view('asistenciacooperacione.index',compact('asistenciacooperaciones'));
    }


    public function create()
    {
        
        return view('asistenciacooperacione.create');
    }
    
    public function store(Request $request)
    {
            request()->validate([

            'asistencia' => 'required',
            'ciudadano_id'=> 'required',
            'cooperacione_id'=> 'required',
            

        ]);
        Asistenciacooperacione::create($request->all());
        return redirect()->route('asistenciacooperacione.index')
                        ->with('success','Asistencia agregada correctamente correctamente');
    }
}
