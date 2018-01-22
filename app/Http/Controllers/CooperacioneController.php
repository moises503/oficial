<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cooperacione;

class CooperacioneController extends Controller
{
    public function index()
    {
        $cooperaciones = Cooperacione::latest()->paginate(5);
        return view('cooperacione.index',compact('cooperaciones'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

       public function create()
    {

        return view('cooperacione.create');
    }
    
    public function store(Request $request)
    {
            request()->validate([
            'tipo' => 'required',
            'descripcion',
            'organiza' ,
            'cantidad' => 'required',
            'fechacooperacion' => 'required',
        ]);
        Cooperacione::create($request->all());
        return redirect()->route('cooperacione.index')
                        ->with('success','Cooperacion creada correctamente');
    }


    public function show(Cooperacione $cooperacione)
    {
        return view('cooperacione.show',compact('cooperacione'));
    }

    public function edit(Cooperacione $cooperacione)
    {
        return view('cooperacione.edit',compact('cooperacione'));
    }

    public function update(Request $request,Cooperacione $cooperacione)
    {
        request()->validate([
            'tipo' ,
            'descripcion' ,
            'organiza' ,
            'cantidad' ,
          
        ]);
        $cooperacione->update($request->all());
        return redirect()->route('cooperacione.index')
                        ->with('success','Cooperacion modificada correctamente');
    }

}
