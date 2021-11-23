@extends('layouts.app')

@section('template_title')
    Inversionistas
@endsection

@section('content')

  
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/templatemo-sixteen.css">
    <link rel="stylesheet" href="css/owl.css">


    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>preguntas frecuentes</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>AVISO DE PRIVACIDAD</h4>
              <h5>NOMBRE</h5>
              <ul class="featured-list">
                <li><a href="#">FAST BUSINESS</a></li>
              </ul>
              <h4>AVISO DE PRIVACIDAD</h4>
              <h5>NOMBRE</h5>
              <ul class="featured-list">
                <li><a href="#">FAST BUSINESS</a></li>
              </ul>
              <h4>AVISO DE PRIVACIDAD</h4>
              <h5>NOMBRE</h5>
              <ul class="featured-list">
                <li><a href="#">FAST BUSINESS</a></li>
              </ul>
              <h4>AVISO DE PRIVACIDAD</h4>
              <h5>NOMBRE</h5>
              <ul class="featured-list">
                <li><a href="#">FAST BUSINESS</a></li>
              </ul>
              <h4>AVISO DE PRIVACIDAD</h4>
              <h5>NOMBRE</h5>
              <ul class="featured-list">
                <li><a href="#">FAST BUSINESS</a></li>
              </ul>
              <h4>AVISO DE PRIVACIDAD</h4>
              <h5>NOMBRE</h5>
              <ul class="featured-list">
                <li><a href="#">FAST BUSINESS</a></li>
              </ul>
              <h4>AVISO DE PRIVACIDAD</h4>
              <h5>NOMBRE</h5>
              <ul class="featured-list">
                <li><a href="#">FAST BUSINESS</a></li>
              </ul>
              <h4>AVISO DE PRIVACIDAD</h4>
              <h5>NOMBRE</h5>
              <ul class="featured-list">
                <li><a href="#">FAST BUSINESS</a></li>
              </ul>
              <h4>AVISO DE PRIVACIDAD</h4>
              <h5>NOMBRE</h5>
              <ul class="featured-list">
                <li><a href="#">FAST BUSINESS</a></li>
              </ul>
              <h4>AVISO DE PRIVACIDAD</h4>
              <h5>NOMBRE</h5>
              <ul class="featured-list">
                <li><a href="#">FAST BUSINESS</a></li>
              </ul>
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="js/custom.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/accordions.js"></script>


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
