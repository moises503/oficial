@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                @if(isset($ciudadano))
                    <h2>Asistencia asambleas de {{ $ciudadano->nombre }}</h2>
                @else
                <h2>Asistencia a Asambleas</h2>
                @endif
            </div>
            <div class="pull-right">

            <a class="btn btn-success" href="{{ route('asistenciaasamblea.create') }}"> Pasar Lista</a>
            </div>
        </div>
    </div>


    <table class="table table-bordered">
        <tr>
           
            <th>Nombre Asamblea</th>
            <th>Fecha asamblea</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Calle</th>
            <th>Numero</th>
            <th>Lugar residencia</th>
            <th>Asistencia</th>
            
            </tr>
    @foreach ($asistenciaasambleas as $aa)
    <tr>
   
        <td>{{ $aa->asambleas->tipo}}</td>
        <td>{{ $aa->asambleas->fechaasamblea}}</td>
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