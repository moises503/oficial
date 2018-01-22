@extends('layouts.navs')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Familiares</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('familiar.create') }}"> Nuevo familiar</a>
            </div>
        </div>
    </div>


    <table class="table table-bordered">
        <tr>
           
            <th>Padre</th>
            <th>Nombre</th>
            <th>Parentesco</th>
            <th>Fecha Naci</th>
            <th>Estado civil</th>
            <th>Ocupacion</th>
            <th>Reside en poblacion</th>
            <th>Fecha de no residir</th>
            
            </tr>
    @foreach ($familiares as $familiare)
    <tr>
   
        <td>{{ $familiare->ciudadanos->nombre}}</td>
        <td>{{ $familiare->nombre}}</td>
        <td>{{ $familiare->parentesco}}</td>
        <td>{{ $familiare->fechanacimiento}}</td>
        <td>{{ $familiare->estadocivil}}</td>
        <td>{{ $familiare->ocupacion}}</td>
        <td>{{ $familiare->resideenpoblacion}}</td>
        <td>{{ $familiare->fechadenoresidir}}</td>
   

        
    </tr>
    @endforeach

    </table> 
     
    @endsection