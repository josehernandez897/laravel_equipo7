<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  @laravelPWA
  <!-- Fonts -->
  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->

  <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.css') }}">
  <link href="{{ asset('vendor1/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css1/sb-admin-2.min.css') }}" rel="stylesheet">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">
</head>
@extends('layouts.app')


@section('template_title')
Inicio
@endsection

<body>
  @section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="300">
      <h1>¡ HAZ CRECER TU NEGOCIO !</h1>
      <a href="{{ route('login') }}" class="btn-get-started scrollto">Comencemos</a>
    </div>
  </section><!-- End Hero -->

  <section class="container-fluid" align="center">
      <div class="container">
            <div class="row">
              <div class="card-body">
                 
                  @foreach ($proyectos as $proyecto)
                  <div style="display: inline-flex;">
                    <div class="card" style="width: 20rem;">
                      <img src="{{asset('storage').'/'.$proyecto->imgpry }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h3 class="h3 text-black-900 mb-4"> <a href="{{ route('proyectoG.show',$proyecto->id) }}">{{ $proyecto->nombrepry }}</a> </h3>
                        <p class="card-text" style="-webkit-line-clamp: 2;">{{ $proyecto->descripcion }}</p><br>
                        <p class="card-text">Categoria: {{ $proyecto->tblcategorium->nombre_c }}</p>
                        <hr>
                        <h6>Cantidad solicitada:${{ $proyecto->Cantidad }} MXN</h6>
                        <hr>
                       <!--seccion de barra de progreso-->
                       <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 23%">23%</div>
                        </div> 
                        <br>
                        <h6>Cantidad recaudado:${{ $proyecto->Cantidad }} MXN</h6>
                      <!--final de barra de progreso-->
                        <form action="{{ route('proyectos.destroy',$proyecto->id) }}" method="POST">
                          <a class="btn btn-primary btn-user btn-block" style="border-radius: 20px;" href="{{ route('proyectoG.show',$proyecto->id) }}"><i class="fa fa-fw fa-eye"></i> Ver Proyecto</a>
                          @csrf

                        </form>

                      </div>
                    </div>
                  </div>

                  @endforeach

                

              </div>
            </div>
          
          {!! $proyectos->links() !!}
      </div>
 
  </section>

  <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}"></script>


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>FAST BUSINESS</h3>
            <p>
              Huejutla de Reyes Hidalgo <br> <br><br>
              <strong>Phone:</strong> +55 7717293115<br>
              <strong>Email:</strong> Fast_business@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">INICIO</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('Nosotros.index')}}">NOSOTROS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('Inversionistas.index')}}">INVERSIONISTAS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('Mapa.index')}}">MAPA</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('ayuda.index')}}">AYUDA</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('proyectos.index')}}">PROYECTOS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('login') }}">INICIAR SESION</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('register') }}">REGISTRARSE</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4></h4>
            <ul>

            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Dudas</h4>
            <p>INTRODUZCA UNA PREGUNTA</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="enviar">
            </form>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="vendor/counterup/counterup.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/venobox/venobox.min.js"></script>
  <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="js/main.js"></script>
  @endsection
</body>