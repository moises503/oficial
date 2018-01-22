@extends('layouts.navs')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Asamblea</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('asamblea.index') }}"> Regresar</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($asamblea, ['method' => 'PATCH','route' => ['asamblea.update', $asamblea->id]]) !!}
        @include('asamblea.form')
    {!! Form::close() !!}
@endsection