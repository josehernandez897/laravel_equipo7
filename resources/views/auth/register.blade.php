@extends('layouts.app')

@section('content')
<section >

    <div class="container" >
         
            <div class="col-md-12 col-md-offset-2">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-6"> </div>
                    <div class="panel-body">

                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                        @endif
                        <div class="col-lg-7 d-none d-lg-block bg-login-image" style="background-image:url(./images/iniciosesion.jpg);">
                        <div class="col-lg-12" style="border-radius: 5px;box-shadow: 2px 2px 5px #999;">
                            <div class="p-">
                                <div class="text-center">
                                    <h2 class="h2 text-black-900 mb-4" style="font-weight: bold;color: #3DB2FF;">¡Bienvenido a Fast Business!</h2>
                                    <h3 class="h3 text-gray-900 mb-4">Registrate y comienza a navegar</h3>
                                </div>
                                <br>
                                <form class="user" role="form" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                         
                                        <div >
                                            <input style="border-radius: 20px;" id="name" type="text" class="form-control form-control-user" placeholder="Nombre de usuario.." name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                         
                                        <div>
                                            <input style="border-radius: 20px;" id="email" type="email" class="form-control form-control-user" placeholder="Proporciona un correo valido.." name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        

                                        <div  >
                                            <input style="border-radius: 20px;" id="password" type="password" class="form-control form-control-user" placeholder="Ingrese una contraseña" name="password" required>

                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <div >
                                            <input style="border-radius: 20px;" id="password-confirm" type="password" class="form-control form-control-user" placeholder="Confirma tu contraseña" name="password_confirmation" required>
                                        </div>
                                         
                                    </div>
 

                                    @if(get_option('enable_recaptcha_registration') == 1)
                                    <div class="form-group {{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                        <div class="col-md-6 col-md-offset-4">
                                            <div class="g-recaptcha" data-sitekey="{{get_option('recaptcha_site_key')}}"></div>
                                            @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    @endif


                                    <div class="form-group">
                                        <div  >
                                            <button style="border-radius: 20px;background:#0F00FF;" type="submit" class="btn btn-primary btn-user btn-block">
                                                @lang('app.register')
                                            </button>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
         
    </div>
</section>
@endsection

@if(get_option('enable_recaptcha_registration') == 1)
<script src='https://www.google.com/recaptcha/api.js'></script>
@endif