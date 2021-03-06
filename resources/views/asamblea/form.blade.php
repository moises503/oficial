<div class="row">
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>Tipo:</strong>
            {!! Form::text('tipo', null, array('placeholder' => 'Tipo','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>Descripcion:</strong>
            {!! Form::text('descripcion', null, array('placeholder' => 'Descripcion','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>Organiza:</strong>
            {!! Form::text('organiza', null, array('placeholder' => 'Organiza','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>FechaAsamblea:</strong>
            {!! Form::date('fechaasamblea', null, array('placeholder' => 'FechaAsamblea','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>