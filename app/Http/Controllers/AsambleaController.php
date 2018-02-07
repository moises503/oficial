<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asamblea;

class AsambleaController extends Controller
{
    public function index()
    {
        $asambleas = Asamblea::latest()->paginate(5);
        return view('asamblea.index',compact('asambleas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        return view('asamblea.create');
    }
    
    public function store(Request $request)
    {
            request()->validate([
            'tipo' => 'required',
            'descripcion',
            'organiza',
            'fechaasamblea' ,
        ]);
        Asamblea::create($request->all());
        return redirect()->route('asamblea.index')
                        ->with('success','Asamblea creada correctamente');
    }

    public function show(Asamblea $asamblea)
    {
        return view('asamblea.show',compact('asamblea'));
    }

    public function edit(Asamblea $asamblea)
    {
        return view('asamblea.edit',compact('asamblea'));
    }

    public function update(Request $request,Asamblea $asamblea)
    {
        request()->validate([
            'tipo',
            'descripcion' ,
            'organiza' ,
            'fechaasamblea' ,
        ]);
        $asamblea->update($request->all());
        return redirect()->route('asamblea.index')
                        ->with('success','Asamblea modificada correctamente');
    }


    public function mostrarAsistenciaAsambleas(Asamblea $asamblea)
    {
        $asistenciaasambleas = $asamblea->asistenciaasambleas;
        return view('asistenciaasamblea.index', compact('asistenciaasambleas', 'asamblea'));
    }


    
}
