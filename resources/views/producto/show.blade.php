@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Contact Date:</strong>
                            {{ $producto->contact_date }}
                        </div>
                        <div class="form-group">
                            <strong>Probable Date:</strong>
                            {{ $producto->probable_date }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $producto->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ahorro Id:</strong>
                            {{ $producto->ahorro_id }}
                        </div>
                        <div class="form-group">
                            <strong>Prestamo Id:</strong>
                            {{ $producto->prestamo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Seguro Id:</strong>
                            {{ $producto->seguro_id }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $producto->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Asociado:</strong>
                            {{ $producto->asociado }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $producto->description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
