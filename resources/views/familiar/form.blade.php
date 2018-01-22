<div class="row">
   

    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>Nombre:</strong>
            {!! Form::text('nombre', null, array('placeholder' => 'nombre','class' => 'form-control','required')) !!}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>Parentesco:</strong>
            {!! Form::text('parentesco', null, array('placeholder' => 'parentesco','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>Fecha de nacimiento:</strong>
            {!! Form::date('fechanacimiento', null, array('placeholder' => 'fechanacimiento','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>Estado Civil:</strong>
            {!! Form::text('estadocivil', null, array('placeholder' => 'estadocivil','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>Ocupacion:</strong>
            {!! Form::text('ocupacion', null, array('placeholder' => 'ocupacion','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>Reside en la poblacion:</strong>
            {!! Form::text('resideenpoblacion', null, array('placeholder' => 'resideenpoblacion','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>Fecha de NO residir:</strong>
            {!! Form::date('fechadenoresidir', null, array('placeholder' => 'fechadenoresidir','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>id de ciudadano:</strong>
            {!! Form::number('ciudadano_id', null, array('placeholder' => 'id_ciudadano','class' => 'form-control')) !!}
        </div>
    </div>
   
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>