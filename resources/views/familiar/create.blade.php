@extends('layouts.navs')
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar Familiar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary"  href="/oficial/public/familiare"> Regresar</a>
            </div>
        </div>
</div>
{!! Form::open(array('route' => 'familiar.store','method'=>'POST')) !!}
         @include('familiar.form')
    {!! Form::close() !!}
@endsection