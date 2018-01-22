<div class="row">
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>Nombre:</strong>
            {!! Form::text('nombre', null, array('placeholder' => 'Nombre','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>Lugar Nacimiento:</strong>
            {!! Form::text('lugarnacimiento', null, array('placeholder' => 'Lugarnacimiento','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Fecha Nacimiento:</strong>
            {!! Form::date('fechanacimiento', null, array('placeholder' => 'Fechanacimiento','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Calle domicilio:</strong>
            {!! Form::text('calledomicilio', null, array('placeholder' => 'Calledomicilio','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Numero domicilio:</strong>
            {!! Form::text('numerodomicilio', null, array('placeholder' => 'Numerodomicilio','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Residencia:</strong>
            {!! Form::text('residencia', null, array('placeholder' => 'Residencia','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Sexo:</strong>
            {!! Form::text('sexo', null, array('placeholder' => 'Sexo','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Lengua Materna:</strong>
            {!! Form::text('lenguamaterna', null, array('placeholder' => 'Lenguamaterna','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Ocupacion:</strong>
            {!! Form::text('ocupacion', null, array('placeholder' => 'Ocupacion','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Grado Estudios:</strong>
            {!! Form::text('gradoestudios', null, array('placeholder' => 'Gradoestudios','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Estado Civil:</strong>
            {!! Form::text('estadocivil', null, array('placeholder' => 'Estadocivil','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Fecha Casado:</strong>
            {!! Form::date('fechacasado', null, array('placeholder' => 'Fechacasado','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Fecha desde que cuenta con Ciudadania:</strong>
            {!! Form::date('fechaciudadano', null, array('placeholder' => 'Fechaciudadano','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Fecha que adquirio predio:</strong>
            {!! Form::date('fechapredio', null, array('placeholder' => 'Fechapredio','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="form-group">
            <strong>Servicio Agua:</strong>
            {!! Form::text('servicioagua', null, array('placeholder' => 'SI O NO','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>Nombre del titular de la toma de Agua:</strong>
            {!! Form::text('nombretomaagua', null, array('placeholder' => 'Nombre_del_titular','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="form-group">
            <strong>Servicio Salud :</strong>
            {!! Form::text('serviciosalud', null, array('placeholder' => 'Serviciosalud','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="form-group">
            <strong>Servicio Panteon:</strong>
            {!! Form::text('serviciopanteon', null, array('placeholder' => 'SI O NO','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="form-group">
            <strong>Nombre del responsable:</strong>
            {!! Form::text('nombreresponsable', null, array('placeholder' => 'Nombreresponsable','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="form-group">
            <strong>Servicio de Drenaje:</strong>
            {!! Form::text('serviciodrenaje', null, array('placeholder' => 'SI O NO','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="form-group">
            <strong>Servicio de energia:</strong>
            {!! Form::text('servicioenergia', null, array('placeholder' => 'SI O NO','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>