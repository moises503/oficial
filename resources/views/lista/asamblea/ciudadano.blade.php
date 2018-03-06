@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Asambleas de {{ $ciudadano->nombre }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ciudadano.index') }}">Regresar</a>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Tipo</th>
            <th>Descripcion</th>
            <th>Organiza</th>
            <th>Fecha Asamblea</th>
            <th>Asistió</th>
        </tr>
        @foreach ($asambleas as $asamblea)
            <tr class="{{ $asamblea->pivot->asistio ? "success" : "danger" }}">
                <td>{{ $asamblea->id }}</td>
                <td>{{ $asamblea->tipo}}</td>
                <td>{{ $asamblea->descripcion}}</td>
                <td>{{ $asamblea->organiza}}</td>
                <td>{{ $asamblea->fechaasamblea}}</td>
                <td>
                    {{ $asamblea->pivot->asistio ? "Sí" : "No" }}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $asambleas->render() !!}

@endsection