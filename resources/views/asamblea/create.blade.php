@extends('layouts.app')
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar Asamblea</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('asamblea.index') }}"> Regresar</a>
            </div>
        </div>
</div>

{!! Form::open(array('route' => 'asamblea.store','method'=>'POST')) !!}
         @include('asamblea.form')
    {!! Form::close() !!}
@endsection