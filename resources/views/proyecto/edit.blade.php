@extends('layouts.app')

@section('template_title')
    Update Proyecto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Datos Proyecto</span>
                    </div> 
                    <div class="card-body">
                    
                        <form method="POST" action="{{ route('proyectos.edit', $proyecto->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                            @include('proyecto.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
