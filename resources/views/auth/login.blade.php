@extends('layouts.app')

@section('content')
<br><br><br>

<style>
    ddd:{
        border-radius: 5px;
        border-color: gray;
        box-shadow: gray;
        border-width: 1;
        font-weight: bold;
        color: #3DB2FF;
        box-shadow: greenyellow;
        
    }
</style>

<div >
    <div class="container" >

        <div class="col-md-12 col-md-offset-2">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-6">
                    <div class="panel-body">
                        <!-- Nested Row within Card Body -->
                        <div>
                            <div class="col-lg-7 d-none d-lg-block bg-login-image" style="background-image:url(./images/123.jpg);border-radius: 5px;box-shadow: 2px 2px 5px #999;">


                            <div class="col-lg-12" >
                                <div class="p-" >
                                    <br>
                                    <div class="text-center">
                                        <br>
                                        <h2 class="h2 text-black-900 mb-4" style="font-weight: bold;color: black;">¡Bienvenido a Fast Business!</h2>
                                     </div>
                                    <br>
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
                                                        {{ __('Recuerdame') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" style="border-radius: 20px;background:#0F00FF;" class="btn btn-primary btn-user btn-block">
                                            Iniciar sesion
                                        </button>
                                    </form>
                                    <br>
                                    <hr>
                                   
                                    <div class="text-center">
                                        @if (Route::has('password.request'))
                                        <a style="color: black;font-weight: bold;" class="btn btn-link" href="{{ route('password.request') }}">
                                            Olvidaste tu contraseña?
                                        </a>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        <a style="color: black;font-weight: bold;" class="small" href="{{ route('register') }}">Crear una Cuenta!</a>
                                    </div>
                                </div>

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
