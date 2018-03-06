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
    @include('partials.alertas')
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
            @if($cooperacion->activa)
                <a class="btn btn-primary" href="{{ route('lista.cooperacion', $cooperacion) }}">Pasar lista</a>
            @else
                <a class="btn btn-info" href="{{ route('asistencias.cooperacion', $cooperacion) }}">Ver asistencias</a>
            @endif
        </td>
        {!! Form::close() !!}
    </tr>
    @endforeach
    </table>
    {!! $cooperaciones->render() !!}
@endsection

