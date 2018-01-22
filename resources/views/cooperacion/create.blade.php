@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar Cooperacion</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cooperacion.index') }}"> Regresar</a>
            </div>
        </div>
</div>
    {!! Form::open(array('route' => 'cooperacion.store','method'=>'POST')) !!}
         @include('cooperacion.form')
    {!! Form::close() !!}
@endsection