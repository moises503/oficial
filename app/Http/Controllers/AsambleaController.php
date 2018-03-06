<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Asamblea;
use App\Ciudadano;
use Illuminate\Http\Request;

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
        $ciudadanos = Ciudadano::whereNotNull('fechaciudadano')->get();
        if($ciudadanos->isEmpty()){
            return redirect()->route('cooperacion.index')->with('danger','Debes agregar ciudadanos al sistema para poder
             crear una cooperación, recuerda proporcionar su fecha de nacimiento y fecha de ciudadanía');
        }
        $asamblea = Asamblea::create($request->all());
        $this->agregarCiudadanosAlaLista($ciudadanos, $asamblea);
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

    private function agregarCiudadanosAlaLista($ciudadanos, $asamblea)
    {
        foreach ($ciudadanos as $ciudadano){
            if(Carbon::parse($ciudadano->fechanacimiento)->age >= 18){
                $asamblea->ciudadanos()->attach($ciudadano->id, ['asistio' => false]);
            }
        }
    }
}
