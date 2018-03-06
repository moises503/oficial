@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Asambleas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('asamblea.create') }}"> Nueva Asamblea</a>
            </div>
        </div>
    </div>
    @include('partials.alertas')
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Tipo</th>
            <th>Descripcion</th>
            <th>Organiza</th>
            <th>Fecha Asamblea</th>
            <th width="360px">Operacion</th>
        </tr>
    @foreach ($asambleas as $asamblea)
    <tr>
        <td>{{ $asamblea->id }}</td>
        <td>{{ $asamblea->tipo}}</td>
        <td>{{ $asamblea->descripcion}}</td>
        <td>{{ $asamblea->organiza}}</td>
        <td>{{ $asamblea->fechaasamblea}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('asamblea.show',$asamblea->id) }}">Ver</a>
            <a class="btn btn-info" href="{{ route('asamblea.edit',$asamblea->id) }}">Editar</a>
            @if($asamblea->activa)
                <a class="btn btn-primary" href="{{ route('lista.asamblea', $asamblea) }}">Pasar Lista</a>
            @else
                <a class="btn btn-info" href="{{ route('asistencias.asamblea', $asamblea) }}">Ver asistencias</a>
            @endif
        </td>
        
    </tr>
    @endforeach
    </table>
    {!! $asambleas->render() !!}

@endsection