@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? 'Show Proyecto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles del Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyectoG.index') }}">Rgeresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoria al que pertenece:</strong>
                            {{ $proyecto->tblcategorium->nombre_c }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre del proyecto:</strong>
                            {{ $proyecto->nombrepry }}
                        </div>
                        <div class="form-group">
                            <strong>Historia del proyecto:</strong>
                            {{ $proyecto->descripcion }}
                        </div>
                         
                        <div class="form-group">
                            <strong>cantidad solicitada:</strong>
                            ${{ $proyecto->Cantidad }}
                        </div>
                        <div class="form-group">
                            <img class="img-fluid" src="{{asset('storage').'/'.$proyecto->imgpry }}" alt="" />

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
