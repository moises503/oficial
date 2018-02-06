@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cooperaciones</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cooperacion.create') }}"> Nueva Cooperacion</a>
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
            <th>No</th>
            <th>Asunto</th>
            <th>Descripcion</th>
            <th>Organiza</th>
            <th>Cantidad</th>
            <th>Fecha</th>
            <th width="360px">Operacion</th>
            
            </tr>
    @foreach ($cooperaciones as $cooperacion)
    <tr>
        <td>{{ $cooperacion->id }}</td>
        <td>{{ $cooperacion->tipo}}</td>
        <td>{{ $cooperacion->descripcion}}</td>
        <td>{{ $cooperacion->organiza}}</td>
        <td>{{ $cooperacion->cantidad}}</td>
        <td>{{ $cooperacion->fechacooperacion}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('cooperacion.show',$cooperacion) }}">Ver</a>
            <a class="btn btn-info" href="{{ route('cooperacion.edit',$cooperacion) }}">Editar</a>
            <a class="btn btn-info" href="{{ route('asistenciacooperacione.index') }}">Ver asistencias</a>
            <a class="btn btn-primary" href="{{ route('asistenciacooperacione.create') }}">Pasar Lista</a>
        </td>
        {!! Form::close() !!}
    </tr>
    @endforeach
    </table>
    {!! $cooperaciones->render() !!}
@endsection