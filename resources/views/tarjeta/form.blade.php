<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cod_socio') }}
            {{ Form::text('cod_socio', $tarjeta->cod_socio, ['class' => 'form-control' . ($errors->has('cod_socio') ? ' is-invalid' : ''), 'placeholder' => 'Cod Socio']) }}
            {!! $errors->first('cod_socio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $tarjeta->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido1') }}
            {{ Form::text('apellido1', $tarjeta->apellido1, ['class' => 'form-control' . ($errors->has('apellido1') ? ' is-invalid' : ''), 'placeholder' => 'Apellido1']) }}
            {!! $errors->first('apellido1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido2') }}
            {{ Form::text('apellido2', $tarjeta->apellido2, ['class' => 'form-control' . ($errors->has('apellido2') ? ' is-invalid' : ''), 'placeholder' => 'Apellido2']) }}
            {!! $errors->first('apellido2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_tc') }}
            {{ Form::text('numero_tc', $tarjeta->numero_tc, ['class' => 'form-control' . ($errors->has('numero_tc') ? ' is-invalid' : ''), 'placeholder' => 'Numero Tc']) }}
            {!! $errors->first('numero_tc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fch_con') }}
            {{ Form::text('fch_con', $tarjeta->fch_con, ['class' => 'form-control' . ($errors->has('fch_con') ? ' is-invalid' : ''), 'placeholder' => 'Fch Con']) }}
            {!! $errors->first('fch_con', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('monto', $tarjeta->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('saldo') }}
            {{ Form::text('saldo', $tarjeta->saldo, ['class' => 'form-control' . ($errors->has('saldo') ? ' is-invalid' : ''), 'placeholder' => 'Saldo']) }}
            {!! $errors->first('saldo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>