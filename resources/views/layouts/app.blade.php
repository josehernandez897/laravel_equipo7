<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FastBusiness</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="/bootstrap/css/adminlte.min.css.map">
    <link rel="stylesheet" href="/bootstrap/css/app.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/fontawesome.css">
<link rel="stylesheet" href="css/templatemo-sixteen.css">
<link rel="stylesheet" href="css/owl.css">

   <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
   <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css"> 
   <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css.map">
</head>

<body>

<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>  
<!-- ***** Preloader End ***** -->

<!-- Header -->
<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}"><h2>FAST <em>BUSINESS</em></h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                             <a class="nav-link" href="{{ url('/') }}">{{ __('inicio') }}</a>
                        </li>
                        
                        <li class="nav-item">
                             <a class="nav-link" href="{{ route('Inversionistas.index') }}">{{ __('Inversionistas') }}</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="{{ route('Mapa.index') }}">{{ __('Mapa') }}</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="{{ route('ayuda.index') }}">{{ __('ayuda') }}</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="{{ route('Nosotros.index') }}">{{ __('Nosotros') }}</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="{{ route('proyectos.index') }}">{{ __('Proyectos') }}</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="{{ route('tblcategoria.index') }}">{{ __('Categorias') }}</a>
                        </li>
                       
                         
                    </ul>
                   
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                  
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Bienvenido :{{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesion') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
    </div>
  </nav>
  <main class="py-4">
            @yield('content')
        </main>
</header>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="js/custom.js"></script>
<script src="js/owl.js"></script>
<script src="js/slick.js"></script>
<script src="js/isotope.js"></script>
<script src="js/accordions.js"></script>

</body>

</html>
