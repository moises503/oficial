@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Asamblea</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('asamblea.index') }}"> Regresar</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo de Asamblea:</strong>
                {{ $asamblea->tipo}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion:</strong>
                {{ $asamblea->descripcion}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Organizo:</strong>
                {{ $asamblea->organiza}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha de realizacion:</strong>
                {{ $asamblea->fechaasamblea}}
            </div>
        </div>
    </div>
@endsection