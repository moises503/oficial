<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Familiar;

class FamiliarController extends Controller
{
    public function index()
    {
        $familiares = Familiar::with('ciudadanos')->get();
     
        return view('familiar.index',compact('familiares'));
    }


    public function create()
    {
        
        return view('familiar.create');
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
        Familiar::create($request->all());
        return redirect()->route('familiar.index')
                        ->with('success','Familiar agregado correctamente');
    }
}
