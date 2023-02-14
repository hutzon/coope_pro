@extends('layouts.app')

@section('template_title')
    Producto
@endsection




@section('content')
    <div class="container-fluid">
        <form class="d-flex" role="search">
            <input type="date" name="start_date" placeholder="Fecha de inicio" value="01/01/1900">
            <input type="date" name="end_date" placeholder="Fecha de fin" value="01/01/2900">
            <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Producto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Contact Date</th>
										<th>Probable Date</th>
										<th>User Id</th>
										<th>Ahorro Id</th>
										<th>Prestamo Id</th>
										<th>Seguro Id</th>
										<th>Codigo</th>
										<th>Asociado</th>
										<th>Description</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $producto->contact_date }}</td>
											<td>{{ $producto->probable_date }}</td>
											<td>{{ $producto->user_id }}</td>
											<td>{{ $producto->ahorro_id }}</td>
											<td>{{ $producto->prestamo_id }}</td>
											<td>{{ $producto->seguro_id }}</td>
											<td>{{ $producto->codigo }}</td>
											<td>{{ $producto->asociado }}</td>
											<td>{{ $producto->description }}</td>

                                            <td>
                                                <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('productos.show',$producto->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('productos.edit',$producto->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
@endsection
