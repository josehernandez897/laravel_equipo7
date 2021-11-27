@extends('layouts.app')

@section('content')
<br><br><br>

<!-- Custom styles for this template-->


<div class="container">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-theme.css') }}" rel="stylesheet">
    <!-- Font awesome 4.4.0 -->
    <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.4.0/css/font-awesome.min.css') }}">
    <!-- load page specific css -->
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div style="background-image:url(./images/iniciosesion.jpg);" style="flex: none;">

                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h2 class="h2 text-black-900 mb-4">¡Bienvenido a Fast Business!</h2>
                                    <h3 class="h3 text-gray-900 mb-4">Inicio de sesion</h3>

                                </div>
                                <form class="user" role="form" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                                        <input id="email" style="border-radius: 20px;" type="email" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Ingresa tu Email Address..." name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif

                                    </div>

                                    <div class="form-group">
                                        <input id="password" style="border-radius: 20px;" type="password" class="form-control form-control-user" placeholder="Password" required autocomplete="current-password" name="password">

                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <th></th>
                                                <th></th>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>                                        
                                            <button type="submit" style="border-radius: 20px;background: #113CFC;" class="btn btn-primary btn-user btn-block">
                                                Iniciar sesion
                                            </button>      
                                </form>

                                <hr>
                                <div class="text-center">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Olvidaste tu contraseña?
                                    </a>
                                    @endif
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('register') }}">Crear una Cuenta!</a>
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