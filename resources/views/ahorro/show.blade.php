@extends('layouts.app')

@section('template_title')
    {{ $ahorro->name ?? 'Show Ahorro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ahorro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ahorros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $ahorro->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
