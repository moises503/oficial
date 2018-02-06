@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ciudadanos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ciudadano.create') }}"> Nuevo ciudadano</a>
            </div>
        </div>
    </div>

    <div class="pull-rigth">
            {!! Form::open(['route' => 'ciudadano.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
                <div class="input-group">
               {!! Form::text('nombre', null, ['class' => 'form-control', 'placelhoder' => 'Buscar ciudadano..', 'aria-describedby' => 'search']) !!}
                    <span class="input-group-addon" id="search">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                 </div>
                  {!! Form::close() !!}
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Calle</th>
            <th>Numero</th>
            <th>Residencia</th>
            <th>Fecha Nacimiento</th>
            <th width="330px">Operacion</th>
            
            </tr>
    @foreach ($ciudadanos as $ciudadano)
    <tr>
        <td>{{ $ciudadano->id}}</td>
        <td>{{ $ciudadano->nombre}}</td>
        <td>{{ $ciudadano->calledomicilio}}</td>
        <td>{{ $ciudadano->numerodomicilio}}</td>
        <td>{{ $ciudadano->residencia}}</td>
        <td>{{ $ciudadano->fechanacimiento}}</td>
        <td>
           
            <a class="btn btn-info" href="{{ route('ciudadano.show',$ciudadano) }}">Informacion</a>
            <a class="btn btn-info" href="{{ route('ciudadano.edit',$ciudadano) }}">Editar</a>
            <a class="btn btn-info" href="{{ route('familiar.ciudadano', $ciudadano) }}">Agregar Familiar</a>
            <a class="btn btn-primary" href="{{ route('ciudadano.asistenciatequios', $ciudadano)}}">Tequios</a>
            <a class="btn btn-primary" href="{{ route('ciudadano.asistenciaasambleas', $ciudadano)}}">Asambleas</a>
            <a class="btn btn-primary" href=" {{ route('ciudadano.asistenciacooperaciones', $ciudadano)}}">Cooperaciones</a>
            <a class="btn btn-info" href="{{ route('ciudadano.familiares', $ciudadano) }}">Ver familiares</a>

          
        </td>
        
    </tr>
    @endforeach

    </table> 

@endsection