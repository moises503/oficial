<?php



namespace App\Http\Controllers;

use App\Ciudadano;
use Illuminate\Http\Request;

class CiudadanoController extends Controller
{
    
    public function index(Request $request)
    {
        if($request->has('busqueda')){
            $busqueda = $request->get('busqueda');
            if(empty($busqueda)){
                return redirect()->back()->with('danger','Proporcione un nombre para realizar la búsqueda');
            }
            $ciudadanos = Ciudadano::where('nombre','LIKE',"%$busqueda%")->paginate(5);
            return view('ciudadano.index', compact('ciudadanos'));
        }
        $ciudadanos = Ciudadano::latest()->paginate(5);
        return view('ciudadano.index',compact('ciudadanos'))
        ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    public function create()
    { 
        return view('ciudadano.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'nombre' => 'required',
            'lugarnacimiento',
            'fechanacimiento' => 'required',
            'calledomicilio',
            'numerodomicilio',
            'residencia' ,
            'sexo' ,
            'lenguamaterna',
            'ocupacion' ,
            'gradoestudios', 
            'estadocivil' ,
            'fechacasado',
            'fechapredio' ,
            'fechaciudadano',
            'servicioagua',
            'nombretomaagua', 
            'serviciosalud',
            'serviciopanteon',
            'nombreresponsable', 
            'serviciodrenaje',
            'servicioenergia',
        ]);
        Ciudadano::create($request->all());
        return redirect()->route('ciudadano.index')
                        ->with('success','Ciudadano creado correctamente');
    }



    public function show(Ciudadano $ciudadano)
    {
        return view('ciudadano.show',compact('ciudadano'));
    }

    public function edit(Ciudadano $ciudadano)
    {
        return view('ciudadano.edit',compact('ciudadano'));
    }

    public function update(Request $request,Ciudadano $ciudadano)
    {
        request()->validate([
            'nombre' ,
            'lugarnacimiento' ,
            'fechanacimiento' ,
            'calledomicilio',
            'numerodomicilio' ,
            'residencia' ,
            'sexo' ,
            'lenguamaterna' ,
            'ocupacion' ,
            'gradoestudios', 
            'estadocivil',
            'fechacasado',
            'fechapredio' ,
            'fechaciudadano',
            'servicioagua',
            'nombretomaagua', 
            'serviciosalud',
            'serviciopanteon',
            'nombreresponsable', 
            'serviciodrenaje',
            'servicioenergia',
        ]);



        $ciudadano->update($request->all());
        return redirect()->route('ciudadano.index')
                        ->with('success','Ciudadano modificado coorectamente');
    }

    public function mostrarFamiliares(Ciudadano $ciudadano)
    {
        $familiares = $ciudadano->familiares;
        return view('familiar.index', compact('familiares', 'ciudadano'));
    }
}