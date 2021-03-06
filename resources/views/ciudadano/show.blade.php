@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Ciudadano</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ciudadano.index') }}"> Regresar</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $ciudadano->nombre}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lugar de nacimiento:</strong>
                {{ $ciudadano->lugarnacimiento}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha nacimiento:</strong>
                {{ $ciudadano->fechanacimiento}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Calle domicilio:</strong>
                {{ is_null($ciudadano->calledomicilio) ? 'No proporcionado' : $ciudadano->calledomicilio }}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numero domicilio:</strong>
                {{ is_null($ciudadano->numerodomicilio) ? 'No proporcionado' : $ciudadano->numerodomicilio }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Residencia:</strong>
                {{ is_null($ciudadano->residencia) ? 'No proporcionado' : $ciudadano->residencia }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sexo:</strong>
                {{ $ciudadano->sexo == 0 ? 'No proporcionado' : $ciudadano->sexo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lengua Materna:</strong>
                {{ is_null($ciudadano->lenguamaterna) ? 'No proporcionado' : $ciudadano->lenguamaterna }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ocupacion:</strong>
                {{ is_null($ciudadano->ocupacion) ? 'No proporcionado' : $ciudadano->ocupacion }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Grado de estudios:</strong>
                {{ $ciudadano->gradoestudios}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Estado Civil:</strong>
                {{ $ciudadano->estadocivil}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha Casado:</strong>
                {{ is_null($ciudadano->fechacasado) ? 'No proporcionado' : $ciudadano->fechacasado }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha en la que tomo ciudadania:</strong>
                {{ is_null($ciudadano->fechaciudadano) ? 'No proporcionado' : $ciudadano->fechaciudadano }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha en la que adquirio algun predio en la poblacion:</strong>
                {{ is_null($ciudadano->fechapredio) ? 'No proporcionado' : $ciudadano->fechapredio }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cuenta con el servicio de agua:</strong>
                {{ $ciudadano->servicioagua}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre de la toma de agua:</strong>
                {{ is_null($ciudadano->nombretomaagua) ? 'No proporcionado' : $ciudadano->nombretomaagua }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Servicio de salud con el que cuenta:</strong>
                {{ $ciudadano->serviciosalud}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cuenta con derecho a panteon:</strong>
                {{ $ciudadano->serviciopanteon}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre de responsable de panteon:</strong>
                {{ $ciudadano->nombreresponsable}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cuenta con el servicio de drenaje:</strong>
                {{ $ciudadano->serviciodrenaje}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cuenta con el servicio de electricidad:</strong>
                {{ $ciudadano->servicioenergia}}
            </div>
        </div>
    </div>
@endsection