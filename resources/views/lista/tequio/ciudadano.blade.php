@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tequios de {{ $ciudadano->nombre }}</h2>
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
            <th>Fecha</th>
            <th>Asistió</th>
        </tr>
        @foreach ($tequios as $tequio)
            <tr class="{{ $tequio->pivot->asistio ? "success" : "danger" }}">
                <td>{{ $tequio->id }}</td>
                <td>{{ $tequio->tipo}}</td>
                <td>{{ $tequio->descripcion}}</td>
                <td>{{ $tequio->organiza}}</td>
                <td>{{ $tequio->fechatequio}}</td>
                <td>
                    {{ $tequio->pivot->asistio ? "Sí" : "No" }}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $tequios->render() !!}

@endsection