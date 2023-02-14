@extends('layouts.app')

@section('template_title')
    Ahorro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ahorro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ahorros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Name</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ahorros as $ahorro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ahorro->name }}</td>

                                            <td>
                                                <form action="{{ route('ahorros.destroy',$ahorro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ahorros.show',$ahorro->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ahorros.edit',$ahorro->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $ahorros->links() !!}
            </div>
        </div>
    </div>
@endsection
