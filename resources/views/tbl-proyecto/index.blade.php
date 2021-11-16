@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Tblproyecto</div>
                    <div class="card-body">
                        <a href="{{ url('/tbl-proyecto/create') }}" class="btn btn-success btn-sm" title="Add New tblProyecto">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar nuevo
                        </a>

                        <form method="GET" action="{{ url('/tbl-proyecto') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                       
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Proyecto</th><th>Descripcion</th><th>Imagen</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($tblproyecto as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombrepry }}</td>
                                        <td>{{ $item->descripcion }}</td>
                                         
                                        <td>
                                            <img class="img-fluid" src="{{asset('storage').'/'.$item->imgpry }}" alt="" />
                                        </td>
                                        <td>
                                            <a href="{{ url('/tbl-proyecto/' . $item->id) }}" title="View tblProyecto">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true">
                                                    </i> View
                                                </button>
                                            </a>
                                            <a href="{{ url('/tbl-proyecto/' . $item->id . '/edit') }}" title="Edit tblProyecto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/tbl-proyecto' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete tblProyecto" ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $tblproyecto->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
