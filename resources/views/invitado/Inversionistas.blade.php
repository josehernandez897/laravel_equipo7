@extends('layouts.app')

@section('template_title')
    Inversionistas
@endsection

@section('content')

  
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/templatemo-sixteen.css">
    <link rel="stylesheet" href="css/owl.css">
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

    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Inversionistas</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="images/portfolio/RodrigoA.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Rodrigo Herrera</h4>
                <p>Rodrigo Herrera Aspra, ​es un empresario mexicano y líder en redes sociales, fundador de Gennoma Lab International, una de las principales compañías farmacéuticas del país.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="images/portfolio/CarlosB.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Carlos Bremer</h4>
                <p>Carlos Bremer es uno de los empresarios más reconocidos en México tras su participación en el reality show de emprendimiento Shark Tank México, en el cual también participan Arturo Elías Ayub, Rodrigo Herrera Aspra y Marcus Dantus.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="images/ArturoE.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Arturo Elias</h4>
                <p>Arturo Elías Ayub ​ es un empresario mexicano que actualmente se desempeña como Director de Alianzas Estratégicas y Contenidos de América Móvil, Director General de la Fundación TELMEX Telcel, Director de Uno TV y de Claro Sports.</p>
              </div>
            </div>
          
        </div>
      </div>
    </div>
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
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="js/custom.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/accordions.js"></script>
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


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
@endsection
