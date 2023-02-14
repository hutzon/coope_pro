@extends('layouts.app')

@section('template_title')
    Cliente
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
                                {{ __('Cliente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
                                        <th>Código</th>
										<th>Empleado</th>
										<th>DPI</th>
										<th>Primer Nombre</th>
										<th>Segundo Nombre</th>
										<th>Apellidos</th>
										<th>DIreccion</th>
										<th>Teléfono</th>
										<th>Fecha Nacimiento</th>
										<th>Correo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            
                                            <td>{{ $cliente->id }}</td>
											<td>{{ $cliente->user->name }}</td>
											<td>{{ $cliente->dpi }}</td>
											<td>{{ $cliente->first_name }}</td>
											<td>{{ $cliente->second_name }}</td>
											<td>{{ $cliente->last_name }}</td>
											<td>{{ $cliente->address }}</td>
											<td>{{ $cliente->phone }}</td>
											<td>{{ $cliente->birth_date }}</td>
											<td>{{ $cliente->email }}</td>

                                            <td>
                                                <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('clientes.show',$cliente->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('clientes.edit',$cliente->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                           
                        </div>
                    </div>
                </div>
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@endsection
