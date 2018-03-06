<?php

namespace App\Http\Controllers;

use App\Ciudadano;
use App\Cooperacion;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CooperacionController extends Controller
{
    public function index()
    {
        $cooperaciones = Cooperacion::latest()->paginate(5);
        return view('cooperacion.index',compact('cooperaciones'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('cooperacion.create');
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
        $ciudadanos = Ciudadano::whereNotNull('fechaciudadano')->get();
        if($ciudadanos->isEmpty()){
            return redirect()->route('cooperacion.index')->with('danger','Debes agregar ciudadanos al sistema para poder
             crear una cooperación, recuerda proporcionar su fecha de nacimiento y fecha de ciudadanía');
        }
        $cooperacion = Cooperacion::create($request->all());
        $this->agregarCiudadanosAlaLista($ciudadanos, $cooperacion);
        return redirect()->route('cooperacion.index')
                       ->with('success','Cooperacion creada correctamente');
    }


    public function show(Cooperacion $cooperacion)
    {
        return view('cooperacion.show',compact('cooperacion'));
    }

    public function edit(Cooperacion $cooperacion)
    {
        return view('cooperacion.edit',compact('cooperacion'));
    }

    public function update(Request $request,Cooperacion $cooperacion)
    {
        request()->validate([
            'tipo' ,
            'descripcion' ,
            'organiza' ,
            'cantidad' ,
          
        ]);
        $cooperacion->update($request->all());
        return redirect()->route('cooperacion.index')
                        ->with('success','Cooperacion modificada correctamente');
    }

    private function agregarCiudadanosAlaLista($ciudadanos, $cooperacion)
    {
        foreach ($ciudadanos as $ciudadano){
            if(Carbon::parse($ciudadano->fechanacimiento)->age >= 18){
                $cooperacion->ciudadanos()->attach($ciudadano->id, ['asistio' => false]);
            }
        }
    }

}
