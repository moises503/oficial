<?php

namespace App\Http\Controllers;

use App\Tequio;
use Carbon\Carbon;
use App\Ciudadano;
use Illuminate\Http\Request;

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
        $ciudadanos = Ciudadano::whereNotNull('fechaciudadano')->get();
        if($ciudadanos->isEmpty()){
            return redirect()->route('tequio.index')->with('danger','Debes agregar ciudadanos al sistema para poder
             crear una cooperación, recuerda proporcionar su fecha de nacimiento y fecha de ciudadanía');
        }
        $tequio = Tequio::create($request->all());
        $this->agregarCiudadanosAlaLista($ciudadanos, $tequio);
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

    private function agregarCiudadanosAlaLista($ciudadanos, $tequio)
    {
        foreach ($ciudadanos as $ciudadano){
            if(Carbon::parse($ciudadano->fechanacimiento)->age >= 18){
                $tequio->ciudadanos()->attach($ciudadano->id, ['asistio' => false]);
            }
        }
    }

}
