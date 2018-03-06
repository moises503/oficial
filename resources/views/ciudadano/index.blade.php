@extends('layouts.app')
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
    @include('partials.alertas')
    <div class="row">
        <div class="col-md-8">
            <form class="form-inline" action="{{ route('ciudadano.index') }}" method="GET">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="busqueda" placeholder="Introduce un nombre">
                        <div class="input-group-addon"><i class="fa fa-search"></i></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Buscar</button>
                <a href="{{ route('ciudadano.index') }}" class="btn btn-primary">Limpiar búsqueda</a>
            </form>
        </div>
    </div>
    <br/>
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
            <a class="btn btn-info" href="{{ route('ciudadano.show',$ciudadano) }}">Informacion</a>
            <a class="btn btn-info" href="{{ route('ciudadano.edit',$ciudadano) }}">Editar</a>
            <a class="btn btn-info" href="{{ route('familiar.ciudadano', $ciudadano) }}">Agregar Familiar</a>
            <a class="btn btn-info" href="{{ route('ciudadano.familiares', $ciudadano) }}">Ver familiares</a>
            <a class="btn btn-primary" href="{{ route('asistencias.ciudadano.tequio', $ciudadano) }}">Tequios</a>
            <a class="btn btn-primary" href="{{ route('asistencias.ciudadano.asamblea', $ciudadano) }}">Asambleas</a>
            <a class="btn btn-primary" href="{{ route('asistencias.ciudadano.cooperacion', $ciudadano) }}">Cooperaciones</a>
        </td>
        
    </tr>
    @endforeach

    </table> 
     
    {!! $ciudadanos->render() !!}

@endsection