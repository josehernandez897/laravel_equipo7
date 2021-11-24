@extends('layouts.app')

@section('template_title')
    Inversionistas
@endsection

@section('content')
    

  <link href="images/favicon.png" rel="icon">
  <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

<body>
   <section id="cta" >
      <div class="container">

        <div  class="text-center" data-aos="zoom-in">
        <div class="row">
        <center>
        <div class="column size3">
        <br>
        <br>
            <h2 class="sitemap_homelink"><a href="index.php">Inicio</a></h2>
            <img src="images/inicio.gif" width="100px" height="100px" alt="">
            <div>
            <hr color="blue" size=1 width="790">


            </div>
            <h2 class="sitemap_homelink"><a href="AboutUs.php">Nosotros</a></h2>
            <img src="images/Nosotros.gif" width="100px" height="100px" alt="">
            <div>
            <hr color="blue" size=1 width="790">
            </div>

            
            <h2 class="sitemap_homelink"><a href="Inversionistas.php">Inversionistas</a></h2>
            <img src="images/Invercionistas.gif" width="100px" height="100px" alt="">
            <div>
            <hr color="blue" size=1 width="790">
            </div>


             <h2 class="sitemap_homelink"><a href="Login.php">Iniciar sesion</a></h2>
            <img src="images/Login.gif" width="100px" height="100px" alt="">
            <div>
            <hr color="blue" size=1 width="790">
            </div>

            
            <h2 class="sitemap_homelink"><a href="SignIn.php">Registro</a></h2>
            <img src="images/Registro.gif" width="100px" height="100px" alt="">
            <div>
            <hr color="blue" size=1 width="790">
            </div>

        </div>
        </center>
    </div>
        </div>

      </div>
    </section>

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

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>


@endsection
