@extends('layouts.navs')
@section('content')
{!! Form::open(array('route' => 'asistenciaasamblea.store','method'=>'POST')) !!}
         @include('asistenciaasamblea.form')
    {!! Form::close() !!}
@endsection