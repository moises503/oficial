@extends('layouts.navs')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cooperaciones</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cooperacione.create') }}"> Nueva Cooperacion</a>
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
    @foreach ($cooperaciones as $cooperacione)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $cooperacione->tipo}}</td>
        <td>{{ $cooperacione->descripcion}}</td>
        <td>{{ $cooperacione->organiza}}</td>
        <td>{{ $cooperacione->cantidad}}</td>
        <td>{{ $cooperacione->fechacooperacion}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('cooperacione.show',$cooperacione->id) }}">Ver</a>
            <a class="btn btn-info" href="{{ route('cooperacione.edit',$cooperacione->id) }}">Editar</a>
            <a class="btn btn-info" href="/oficial/public/asistenciacooperacione">Ver asistencias</a>
            <a class="btn btn-primary" href="/oficial/public/asistenciacooperacione">Pasar Lista</a>


         
            
        </td>
        {!! Form::close() !!}
    </tr>
    @endforeach
    </table>
    {!! $cooperaciones->render() !!}
@endsection