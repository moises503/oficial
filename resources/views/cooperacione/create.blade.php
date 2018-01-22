@extends('layouts.navs')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar Cooperacion</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cooperacione.index') }}"> Regresar</a>
            </div>
        </div>
</div>
{!! Form::open(array('route' => 'cooperacione.store','method'=>'POST')) !!}
         @include('cooperacione.form')
    {!! Form::close() !!}
@endsection