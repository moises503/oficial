@extends('layouts.navs')
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar Tequio</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tequio.index') }}"> Regresar</a>
            </div>
        </div>
</div>

{!! Form::open(array('route' => 'tequio.store','method'=>'POST')) !!}
         @include('tequio.form')
    {!! Form::close() !!}
@endsection