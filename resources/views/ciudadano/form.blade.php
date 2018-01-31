<div class="row">
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>Nombre:</strong>
            {!! Form::text('nombre', null, array('placeholder' => 'Nombre','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>Lugar de nacimiento:</strong>
            {!! Form::text('lugarnacimiento', null, array('placeholder' => 'Lugar de nacimiento','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Fecha de nacimiento:</strong>
            {!! Form::date('fechanacimiento', null, array('placeholder' => 'Fecha de nacimiento','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Calle del domicilio:</strong>
            {!! Form::text('calledomicilio', null, array('placeholder' => 'Calle del domicilio','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Número del domicilio:</strong>
            {!! Form::text('numerodomicilio', null, array('placeholder' => 'Número del domicilio','class' => 'form-control')) !!}
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
            {!! Form::select('sexo', ['Seleccione','F' => 'Femenino', 'M' => 'Masculino'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Lengua materna:</strong>
            {!! Form::text('lenguamaterna', null, array('placeholder' => 'Lengua materna','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Ocupación:</strong>
            {!! Form::text('ocupacion', null, array('placeholder' => 'Ocupación','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Grado de estudios:</strong>
            {!! Form::select('gradoestudios', ['Seleccione','P' => 'Primaria', 'S' => 'Secundaria',
            'B' => 'Bachillerato o preparatoria', 'L' => 'Licenciatura',
            'M' => 'Maestría', 'D' => 'Doctorado'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Estado civil:</strong>
            {!! Form::select('estadocivil', ['Seleccione','S' => 'Soltero(a)', 'C' => 'Casado(a)'
            , 'V' => 'Viudo(a)', 'D' => 'Divorciado(a)', 'U' => 'Unión libre'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Fecha en la que se caso:</strong>
            {!! Form::date('fechacasado', null, array('placeholder' => 'Fecha en la que se caso','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Fecha desde que cuenta con ciudadanía:</strong>
            {!! Form::date('fechaciudadano', null, array('placeholder' => 'Fecha desde que cuenta con ciudadanía','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <strong>Fecha que adquirio predio:</strong>
            {!! Form::date('fechapredio', null, array('placeholder' => 'Fecha que adquirio predio','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="form-group">
            <strong>Servicio Agua:</strong>
            {!! Form::select('servicioagua', ['Seleccione','si' => 'SI', 'no' => 'NO'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>Nombre del titular de la toma de Agua:</strong>
            {!! Form::text('nombretomaagua', null, array('placeholder' => 'Nombre del titular','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="form-group">
            <strong>Servicio de salud :</strong>
            {!! Form::select('serviciosalud', ['Seleccione','si' => 'SI', 'no' => 'NO'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="form-group">
            <strong>Servicio de panteón:</strong>
            {!! Form::select('serviciopanteon', ['Seleccione','si' => 'SI', 'no' => 'NO'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="form-group">
            <strong>Nombre del responsable:</strong>
            {!! Form::text('nombreresponsable', null, array('placeholder' => 'Nombre del responsable','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="form-group">
            <strong>Servicio de drenaje:</strong>
            {!! Form::select('serviciodrenaje', ['Seleccione','si' => 'SI', 'no' => 'NO'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="form-group">
            <strong>Servicio de energía:</strong>
            {!! Form::select('servicioenergia', ['Seleccione','si' => 'SI', 'no' => 'NO'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>