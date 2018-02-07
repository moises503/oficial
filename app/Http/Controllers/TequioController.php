<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tequio;


class TequioController extends Controller
{
    public function index()
    {
        $tequios = Tequio::latest()->paginate(5);
        return view('tequio.index',compact('tequios'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        
        return view('tequio.create');
    }
    
    public function store(Request $request)
    {
            request()->validate([
            'tipo' => 'required',
            'descripcion',
            'organiza' ,
            'fechatequio' => 'required',
        ]);
        Tequio::create($request->all());
        return redirect()->route('tequio.index')
                        ->with('success','Tequio agregado correctamente');
    }

    public function show(Tequio $tequio)
    {
        return view('tequio.show',compact('tequio'));
    }

    public function edit(Tequio $tequio)
    {
        return view('tequio.edit',compact('tequio'));
    }

    public function update(Request $request,Tequio $tequio)
    {
        request()->validate([
            'tipo',
            'descripcion',
            'organiza',
            'fechatequio',
        ]);
        $tequio->update($request->all());
        return redirect()->route('tequio.index')
                        ->with('success','Tequio modificado coorectamente');
    }


        public function mostrarAsistenciaTequios(Tequio $tequio)
    {
        $asistenciatequios = $tequio->asistenciatequios;
        return view('asistenciatequio.index', compact('asistenciatequios', 'tequio'));
    }

    
}
