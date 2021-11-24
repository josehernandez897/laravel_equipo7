@extends('layouts.app')
        
    
    @section('template_title')
    Inicio
@endsection

     



    

@section('content')
<link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.css') }}">
    <link href="{{ asset('vendor1/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css1/sb-admin-2.min.css') }}" rel="stylesheet">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">


<body>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="300">
      <h1>¡ HAZ CRECER TU NEGOCIO !</h1>
      <a href="{{ route('login') }}" class="btn-get-started scrollto">Comencemos</a>
    </div>
  </section><!-- End Hero -->

  <div>
    <div class="container-fluid">
        <div >
            <div >
                <div class="card-body">
                    <div class="table-responsive">
                        <div align="center"> 
                            @foreach ($proyectos as $proyecto)
                            <div style="display: inline-flex;">
                                <div class="card" style="width: 19rem;">

                                    <img src="{{asset('storage').'/'.$proyecto->imgpry }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h3 class="h3 text-black-900 mb-4"> <a href="{{ route('proyectoG.show',$proyecto->id) }}">{{ $proyecto->nombrepry }}</a> </h3>
                                        <p class="card-text" style="-webkit-line-clamp: 2;">{{ $proyecto->descripcion }}</p><br>
                                        <p class="card-text">Categoria: {{ $proyecto->tblcategorium->nombre_c }}</p>
                                        <h6>cantidad solicitada:${{ $proyecto->Cantidad }} MXN</h6> <br>

                                        <form action="{{ route('proyectos.destroy',$proyecto->id) }}" method="POST">
                                            <a class="btn btn-primary btn-user btn-block" style="border-radius: 20px;" href="{{ route('proyectoG.show',$proyecto->id) }}"><i class="fa fa-fw fa-eye"></i>  Ver Proyecto</a>
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
            </div>
            {!! $proyectos->links() !!}
        </div>
    </div>
</div>
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

</body>

@endsection

