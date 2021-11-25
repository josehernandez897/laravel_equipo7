<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    @laravelPWA
    <!-- Fonts -->
    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->

    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.css') }}">
    <link href="{{ asset('vendor1/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css1/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body>
    <!--style="background-image:url(/images/welcome1.jpg);background-size: cover;" hasta aqui nos quedamos-->
    @extends('layouts.app')

    @section('content')


    <section>
        <div class="container-fluid">
            <div class="card-body">
                <div class="table-responsive">
                    <div>
                        @foreach ($proyectos as $proyecto)
                        <div style="display: inline-flex;">
                            <div class="card" style="width: 19rem;">

                                <img src="{{asset('storage').'/'.$proyecto->imgpry }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h3 class="h3 text-black-900 mb-4"> <a href="{{ route('proyectoG.show',$proyecto->id) }}">{{ $proyecto->nombrepry }}</a> </h3>
                                    <p class="card-text" style="-webkit-line-clamp: 2;">{{ $proyecto->descripcion }}</p><br>
                                    <p class="card-text">Categoria: {{ $proyecto->tblcategorium->nombre_c }}</p> <br>
                                    <h6>cantidad solicitada:${{ $proyecto->Cantidad }} MXN</h6> <br>

                                    <form action="{{ route('proyectos.destroy',$proyecto->id) }}" method="POST">
                                        <a class="btn btn-primary btn-user btn-block" style="border-radius: 20px;" href="{{ route('proyectoG.show',$proyecto->id) }}"><i class="fa fa-fw fa-eye"></i> Ver Proyecto</a>
                                        @csrf

                                    </form>
                                </div>
                            </div>
                            <br>
                        </div>
                        @endforeach
                        <br>
                         
                    </div>
                </div>
            </div>

            {!! $proyectos->links() !!}

        </div>

    </section>
    @endsection
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}"></script>
</body>

</html>