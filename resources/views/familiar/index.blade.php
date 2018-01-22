@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                @if(isset($ciudadano))
                    <h2>Familiares de {{ $ciudadano->nombre }}</h2>
                @else
                    <h2>Familiares</h2>
                @endif
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('familiar.create') }}"> Nuevo familiar</a>
            </div>
        </div>
    </div>


    <table class="table table-bordered">
        <tr>
           
            <th>Familiar</th>
            <th>Nombre</th>
            <th>Parentesco</th>
            <th>Fecha Nacimiento</th>
            <th>Estado civil</th>
            <th>Ocupacion</th>
            <th>Reside en poblacion</th>
            <th>Fecha de no residir</th>
            
            </tr>
    @foreach ($familiares as $familiar)
    <tr>
   
        <td>{{ $familiar->ciudadano->nombre}}</td>
        <td>{{ $familiar->nombre}}</td>
        <td>{{ $familiar->parentesco}}</td>
        <td>{{ $familiar->fechanacimiento}}</td>
        <td>{{ $familiar->estadocivil}}</td>
        <td>{{ $familiar->ocupacion}}</td>
        <td>{{ $familiar->resideenpoblacion}}</td>
        <td>{{ $familiar->fechadenoresidir}}</td>
   

        
    </tr>
    @endforeach

    </table> 
     
    @endsection