<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('contact_date') }}
            {{ Form::date('contact_date', $producto->contact_date, ['class' => 'form-control' . ($errors->has('contact_date') ? ' is-invalid' : ''), 'placeholder' => 'Contact Date']) }}
            {!! $errors->first('contact_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('probable_date') }}
            {{ Form::date('probable_date', $producto->probable_date, ['class' => 'form-control' . ($errors->has('probable_date') ? ' is-invalid' : ''), 'placeholder' => 'Probable Date']) }}
            {!! $errors->first('probable_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empleado') }}
            {{ Form::select('user_id', $user, $producto->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ahorro_id') }}
            {{ Form::select('ahorro_id', $ahorro, $producto->ahorro_id, ['class' => 'form-control' . ($errors->has('ahorro_id') ? ' is-invalid' : ''), 'placeholder' => 'Ahorro Id']) }}
            {!! $errors->first('ahorro_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prestamo_id') }}
            {{ Form::select('prestamo_id', $prestamo, $producto->prestamo_id, ['class' => 'form-control' . ($errors->has('prestamo_id') ? ' is-invalid' : ''), 'placeholder' => 'Prestamo Id']) }}
            {!! $errors->first('prestamo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('seguro_id') }}
            {{ Form::select('seguro_id', $seguro, $producto->seguro_id, ['class' => 'form-control' . ($errors->has('seguro_id') ? ' is-invalid' : ''), 'placeholder' => 'Seguro Id']) }}
            {!! $errors->first('seguro_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo',$producto->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('asociado') }}
            {{ Form::select('asociado',  ['1' => 'Si', '0' => 'No'], $producto->asociado, ['class' => 'form-control' . ($errors->has('asociado') ? ' is-invalid' : ''), 'placeholder' => 'Asociado']) }}
            {!! $errors->first('asociado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $producto->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>