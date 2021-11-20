@extends('layouts.app')

@section('template_title')
    Tblcategorium
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tabal de Categorias') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tblcategoria.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('CREAR NUEVA CATEGORIA') }}
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
                                        <th>Clave</th>
                                        
										<th>Nombre </th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tblcategoria as $tblcategorium)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tblcategorium->nombre_c }}</td>

                                            <td>
                                                <form action="{{ route('tblcategoria.destroy',$tblcategorium->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tblcategoria.show',$tblcategorium->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tblcategoria.edit',$tblcategorium->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar Categroria</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tblcategoria->links() !!}
            </div>
        </div>
    </div>
@endsection
