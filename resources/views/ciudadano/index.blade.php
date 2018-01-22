@extends('layouts.navs')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ciudadanos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ciudadano.create') }}"> Nuevo ciudadano</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Calle</th>
            <th>Numero</th>
            <th>Residencia</th>
            <th>Fecha Nacimiento</th>
            <th width="330px">Operacion</th>
            
            </tr>
    @foreach ($ciudadanos as $ciudadano)
    <tr>
        <td>{{ $ciudadano->id}}</td>
        <td>{{ $ciudadano->nombre}}</td>
        <td>{{ $ciudadano->calledomicilio}}</td>
        <td>{{ $ciudadano->numerodomicilio}}</td>
        <td>{{ $ciudadano->residencia}}</td>
        <td>{{ $ciudadano->fechanacimiento}}</td>
        <td>
           
            <a class="btn btn-info" href="{{ route('ciudadano.show',$ciudadano->id) }}">Informacion</a>
            <a class="btn btn-info" href="{{ route('ciudadano.edit',$ciudadano->id) }}">Editar</a>
            <a class="btn btn-info" href="/oficial/public/familiar">Agregar Familiar</a>
            <a class="btn btn-primary" href="/oficial/public/asistenciatequio">Tequios</a>
            <a class="btn btn-primary" href="/oficial/public/asistenciaasamblea">Asambleas</a>
            <a class="btn btn-primary" href="/oficial/public/asistenciacooperacione">Cooperaciones</a>


          
        </td>
        
    </tr>
    @endforeach

    </table> 
     
    {!! $ciudadanos->render() !!}

@endsection