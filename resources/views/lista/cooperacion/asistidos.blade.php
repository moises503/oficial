@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cooperacion {{ $cooperacion->tipo }}</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h4>Fecha: {{ $cooperacion->fechacooperacion }}</h4>
        </div>
        <div class="col-md-3">
            <h4>Monto: ${{$cooperacion->cantidad}}</h4>
        </div>
        <div class="col-md-3">
            <h4>Organiza: {{$cooperacion->organiza}}</h4>
        </div>
    </div>
    <br/>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Ciudadanía desde</th>
            <th>Realizó cooperación</th>
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