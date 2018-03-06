@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Asamblea {{ $asamblea->tipo }}</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('asamblea.index') }}" class="btn btn-success">Regresar</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h4>Fecha: {{ $asamblea->fechaasamblea }}</h4>
        </div>
        <div class="col-md-3">
            <h4>Descripción: {{$asamblea->descripcion}}</h4>
        </div>
        <div class="col-md-3">
            <h4>Organiza: {{$asamblea->organiza}}</h4>
        </div>
    </div>
    <br/>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Ciudadanía desde</th>
            <th>Asistió</th>
        </tr>
        @foreach ($ciudadanos as $ciudadano)
            <tr class="{{ $ciudadano->pivot->asistio ? "success" : "danger" }}">
                <td>{{ $ciudadano->id }}</td>
                <td>{{ $ciudadano->nombre}}</td>
                <td>{{ \Carbon\Carbon::parse($ciudadano->fechanacimiento)->age }}</td>
                <td>{{ $ciudadano->fechaciudadano}}</td>
                <td>
                    {{ $ciudadano->pivot->asistio ? "Sí" : "No" }}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $ciudadanos->render() !!}
@endsection


