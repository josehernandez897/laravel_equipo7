<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">

<!-- aqui empeiza el styles para este template-->
<link href="vendor1/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css1/sb-admin-2.min.css" rel="stylesheet">
 
@extends('layouts.app')

@section('template_title')
Proyecto
@endsection

@section('content')
<div class="container-fluid">
    <div class="">
        <div class="">
            <div class="float-right">
                <a href="{{ route('proyectos.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                    {{ __('Empieza Un Proyecto') }}
                </a>
            </div>
            <div >

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <div>
                            @foreach ($proyectos as $proyecto)
                            <div style="display: inline-flex;">
                                <div class="card" style="width: 22rem;">
                                    <img src="{{asset('storage').'/'.$proyecto->imgpry }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h3 class="h3 text-black-900 mb-4"> <a href="{{ route('proyectos.show',$proyecto->id) }}">{{ $proyecto->nombrepry }}</a> </h3>
                                        <p class="card-text" style="-webkit-line-clamp: 2;">{{ $proyecto->descripcion }}</p> 
                                        <p class="card-text">Categoria: {{ $proyecto->tblcategorium->nombre_c }}</p><br>
                                        <h6>cantidad solicitada:${{ $proyecto->Cantidad }} MXN</h6><br>

                                        <form action="{{ route('proyectos.destroy',$proyecto->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('proyectos.show',$proyecto->id) }}"><i class="fa fa-fw fa-eye"></i>Ver Mas</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('proyectos.edit',$proyecto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar infromacion</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                                <br>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            {!! $proyectos->links() !!}
        </div>
    </div>
</div>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}"></script>


@endsection