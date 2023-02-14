@extends('layouts.app')

@section('template_title')
    Tarjeta
@endsection

@section('content')
    <div class="container-fluid">


        <form class="d-flex" role="search">
            <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tarjeta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tarjetas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Cod Socio</th>
										<th>Nombre</th>
										<th>Apellido1</th>
										<th>Apellido2</th>
										<th>Numero Tc</th>
										<th>Fch Con</th>
										<th>Monto</th>
										<th>Saldo</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tarjetas as $tarjeta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tarjeta->cod_socio }}</td>
											<td>{{ $tarjeta->nombre }}</td>
											<td>{{ $tarjeta->apellido1 }}</td>
											<td>{{ $tarjeta->apellido2 }}</td>
											<td>{{ $tarjeta->numero_tc }}</td>
											<td>{{ $tarjeta->fch_con }}</td>
											<td>{{ $tarjeta->monto }}</td>
											<td>{{ $tarjeta->saldo }}</td>

                        
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tarjetas->links() !!}
            </div>
        </div>
    </div>
@endsection
