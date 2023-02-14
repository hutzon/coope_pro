@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $cliente->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Dpi:</strong>
                            {{ $cliente->dpi }}
                        </div>
                        <div class="form-group">
                            <strong>First Name:</strong>
                            {{ $cliente->first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Second Name:</strong>
                            {{ $cliente->second_name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $cliente->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $cliente->address }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $cliente->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Birth Date:</strong>
                            {{ $cliente->birth_date }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $cliente->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
