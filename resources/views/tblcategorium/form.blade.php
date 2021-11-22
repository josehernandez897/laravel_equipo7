<div class="box box-info padding-1">

</div>


<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-7 col-lg-13 col-md-8">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="">
                        <div>
                            <div class="p-5">


                                <div class="box-body">

                                    <div class="form-group">
                                        {{ Form::label('Nombre') }}
                                        {{ Form::text('nombre_c', $tblcategorium->nombre_c, ['class' => 'form-control form-control-user' . ($errors->has('nombre_c') ? ' is-invalid' : ''), 'placeholder' => 'Ingresa una Categoria']) }}
                                        {!! $errors->first('nombre_c', '<div class="invalid-feedback">:message</p>') !!}
                                        </div>

                                    </div>
                                    <div class="box-footer mt20">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Enviar Datos</button>
                                    </div>
                                    <div class="text-center">
                                        <a class="medium" href="{{ route('tblcategoria.index') }}">Salir!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>