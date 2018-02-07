<div class="row">
   

    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>Asistencia:</strong>
           <!-- {!! Form::text('asistencia', null, array('placeholder' => 'nombre','class' => 'form-control','required')) !!}-->
            {!! Form::select('asistencia', ['Seleccione','si' => 'SI', 'no' => 'NO'], null, ['class' => 'form-control']) !!}
        </div>

     <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>id de ciudadano:</strong>
            {!! Form::number('ciudadano_id', null, array('placeholder' => 'id_ciudadano','class' => 'form-control','required')) !!}
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="form-group">
            <strong>id de cooperacion:</strong>
            {!! Form::number('cooperacion_id', null, array('placeholder' => 'id_cooperacion','class' => 'form-control','required')) !!}
        </div>
    </div>
   
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>