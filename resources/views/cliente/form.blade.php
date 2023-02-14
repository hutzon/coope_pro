<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::select('user_id', $user, $cliente->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dpi') }}
            {{ Form::text('dpi', $cliente->dpi, ['class' => 'form-control' . ($errors->has('dpi') ? ' is-invalid' : ''), 'placeholder' => 'Dpi']) }}
            {!! $errors->first('dpi', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('first_name') }}
            {{ Form::text('first_name', $cliente->first_name, ['class' => 'form-control' . ($errors->has('first_name') ? ' is-invalid' : ''), 'placeholder' => 'First Name']) }}
            {!! $errors->first('first_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('second_name') }}
            {{ Form::text('second_name', $cliente->second_name, ['class' => 'form-control' . ($errors->has('second_name') ? ' is-invalid' : ''), 'placeholder' => 'Second Name']) }}
            {!! $errors->first('second_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_name') }}
            {{ Form::text('last_name', $cliente->last_name, ['class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid' : ''), 'placeholder' => 'Last Name']) }}
            {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $cliente->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone') }}
            {{ Form::text('phone', $cliente->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('birth_date') }}
            {{ Form::date('birth_date', $cliente->birth_date, ['class' => 'form-control' . ($errors->has('birth_date') ? ' is-invalid' : ''), 'placeholder' => 'Birth Date']) }}
            {!! $errors->first('birth_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $cliente->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>