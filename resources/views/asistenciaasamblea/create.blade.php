@extends('layouts.app')
@section('content')
{!! Form::open(array('route' => 'asistenciaasamblea.store','method'=>'POST')) !!}
         @include('asistenciaasamblea.form')
    {!! Form::close() !!}
@endsection