@extends('layouts.app')
@section('content')
{!! Form::open(array('route' => 'asistenciatequio.store','method'=>'POST')) !!}
         @include('asistenciatequio.form')
    {!! Form::close() !!}
@endsection