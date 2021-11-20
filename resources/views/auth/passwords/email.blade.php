<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

    <link href="vendor1/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css1/sb-admin-2.min.css" rel="stylesheet">
    
</head>
<header>
   

</header>
<body class="bg-gradient-primary">
@extends('layouts.app')
@section('content')
<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-7 col-lg-13 col-md-8">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">  
                            <div >
                                <div class="p-5">
                                    <div class="text-center">
                                        <div><h1 class="h4 text-gray-900 mb-2">OLVIDO SU CONTRASEÑA?</h1></div>
                                        <p class="mb-3">Simplemente ingrese su dirección de correo electrónico a continuación y le enviaremos un enlace para restablecer su contraseña.!</p>
                                    </div>

                                   
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                            ¡Hemos enviado su enlace de restablecimiento de contraseña por correo electrónico!
                                            </div>
                                        @endif

                                        <form method="POST" action="{{ route('password.email') }}" class="user">
                                            @csrf
                                            <div class="form-group">
                                                   
                                                <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Enter Email Address..." required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>Verifique su correo de favor</strong>
                                                    </span>
                                                @enderror
                                                
                                            </div>
                                            <div >
                                                <button type="submit" style="border-radius: 20;" class="btn btn-primary btn-user btn-block">
                                                    Enviar Enlace al Correo Electronico
                                                </button>
                                            </div>
                                           
                                        </form>

                                    
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login.html">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection




<script src="vendor1/jquery/jquery.min.js"></script>
    <script src="vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor1/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    
</body>
</html>
