@extends('layouts.navs')
@section('content')
{!! Form::open(array('route' => 'asistenciacooperacione.store','method'=>'POST')) !!}
         @include('asistenciacooperacione.form')
    {!! Form::close() !!}
@endsection