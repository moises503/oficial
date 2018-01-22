@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tequios</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tequio.create') }}"> Nuevo Tequio</a>
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
            <th>Tipo</th>
            <th>Descripcion</th>
            <th>Organiza</th>
            <th>Fecha</th>
            <th width="360px">Operacion</th>
            
            </tr>
    @foreach ($tequios as $tequio)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $tequio->tipo}}</td>
        <td>{{ $tequio->descripcion}}</td>
        <td>{{ $tequio->organiza}}</td>
        <td>{{ $tequio->fechatequio}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('tequio.show',$tequio->id) }}">Ver</a>
            <a class="btn btn-info" href="{{ route('tequio.edit',$tequio->id) }}">Editar</a>
            <a class="btn btn-info" href="/oficial/public/asistenciatequio">Ver asistencias</a>
            <a class="btn btn-primary" href="/oficial/public/asistenciatequio">Pasar Lista</a>

        </td>
    </tr>
    @endforeach
    </table>
    {!! $tequios->render() !!}

@endsection