@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cooperaciones de {{ $ciudadano->nombre }}</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('ciudadano.index') }}" class="btn btn-success">Regresar</a>
            </div>
        </div>
    </div>
    <br/>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Asunto</th>
            <th>Descripcion</th>
            <th>Organiza</th>
            <th>Cantidad</th>
            <th>Fecha</th>
            <th>Cooperó</th>
        </tr>
        @foreach ($cooperaciones as $cooperacion)
            <tr class="{{ $cooperacion->pivot->asistio ? "success" : "danger"  }}">
                <td>{{ $cooperacion->id }}</td>
                <td>{{ $cooperacion->tipo}}</td>
                <td>{{ $cooperacion->descripcion}}</td>
                <td>{{ $cooperacion->organiza}}</td>
                <td>{{ $cooperacion->cantidad}}</td>
                <td>{{ $cooperacion->fechacooperacion}}</td>
                <td>{{ $cooperacion->pivot->asistio ? "Sí" : "No"  }}</td>
            </tr>
        @endforeach
    </table>
    {!! $cooperaciones->render() !!}
@endsection

