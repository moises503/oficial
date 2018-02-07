@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            @if(isset($ciudadano))
                    <h2>Asistencia a tequios de {{ $ciudadano->nombre }}</h2>
                    
                    @elseif(isset($tequio))
                    <h2>Lista de asistencias a tequio denominado {{ $tequio->tipo }}</h2>
                
                     @else
                <h2>Asistencia a Tequios</h2>
                @endif
         
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('asistenciatequio.create') }}"> Pasar Lista</a> 
            </div>
        </div>
    </div>


    <table class="table table-bordered">
        <tr>
           
            <th>Nombre Tequio</th>
            <th>Fecha Tequio</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Calle</th>
            <th>Numero</th>
            <th>Lugar residencia</th>
            <th>Asistencia</th>
            
            </tr>
    @foreach ($asistenciatequios as $aa)
    <tr>
   
        <td>{{ $aa->tequios->tipo}}</td>
        <td>{{ $aa->tequios->fechatequio}}</td>
        <td>{{ $aa->ciudadanos->nombre}}</td>
        <td>{{ $aa->ciudadanos->fechanacimiento}}</td>
        <td>{{ $aa->ciudadanos->calledomicilio}}</td>
        <td>{{ $aa->ciudadanos->numerodomicilio}}</td>
        <td>{{ $aa->ciudadanos->residencia}}</td>
        <td>{{ $aa->asistencia}}</td>
      
   

        
    </tr>
    @endforeach

    </table> 
     
    @endsection