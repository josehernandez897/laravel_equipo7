@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">tblProyecto {{ $tblproyecto->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/tbl-proyecto') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/tbl-proyecto/' . $tblproyecto->id . '/edit') }}" title="Edit tblProyecto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('tblproyecto' . '/' . $tblproyecto->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete tblProyecto"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $tblproyecto->id }}</td>
                                    </tr>
                                    <tr><th> Nombrepry 

                                    </th><td> {{ $tblproyecto->nombrepry }} </td></tr>
                                    <tr><th> 
                                        Descripcion </th><td> {{ $tblproyecto->descripcion }} </td>
                                    </tr>
                                    <tr>
                                        <th> Imgpry </th><td>
                                          <br>
                                         
                                            <img class="img-fluid" src="{{asset('storage').'/'.$tblproyecto->imgpry }}" alt="" />
                                        
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
