@extends('layouts.app')

@section('template_title')
    {{ $tarjeta->name ?? 'Show Tarjeta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tarjeta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tarjetas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cod Socio:</strong>
                            {{ $tarjeta->cod_socio }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tarjeta->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido1:</strong>
                            {{ $tarjeta->apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido2:</strong>
                            {{ $tarjeta->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Tc:</strong>
                            {{ $tarjeta->numero_tc }}
                        </div>
                        <div class="form-group">
                            <strong>Fch Con:</strong>
                            {{ $tarjeta->fch_con }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $tarjeta->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Saldo:</strong>
                            {{ $tarjeta->saldo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
