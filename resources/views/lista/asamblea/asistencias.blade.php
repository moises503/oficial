@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Asamblea {{ $asamblea->tipo }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('lista.asamblea.terminada', $asamblea) }}">Marcar como terminado</a>
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
    @include('partials.alertas')
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
            <tr>
                <td>{{ $ciudadano->id }}</td>
                <td>{{ $ciudadano->nombre}}</td>
                <td>{{ \Carbon\Carbon::parse($ciudadano->fechanacimiento)->age }}</td>
                <td>{{ $ciudadano->fechaciudadano}}</td>
                <td>
                    {!! Form::open(['route' => ['lista.asamblea.asistencia', $asamblea], 'method' => 'POST', 'name' => 'asistencia', 'id' => 'asistencia']) !!}
                    <input type="hidden" id="ciudadanoId" name="ciudadanoId" value="{{$ciudadano->id}}">
                    {!! Form::checkbox('asistio', $ciudadano->id, $ciudadano->pivot->asistio, ['id' => 'asistio']) !!}
                    <button type="submit" style="margin-left: 10px" class="btn btn-primary">Asistió</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $ciudadanos->render() !!}
@endsection


