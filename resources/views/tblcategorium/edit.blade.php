@extends('layouts.app')

@section('template_title')
    Update Tblcategorium
@endsection

@section('content')
    <section class="content container-fluid">
        <div align="center" >
            <div align="center" class="col-md-10">

                @includeif('partials.errors')

                <div class="card">
                    <div class="card-header">
                        <span class="card-title">Actualizar Categoria</span>
                    </div>
                    <div  >
                        <form method="POST" action="{{ route('tblcategoria.update', $tblcategorium->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tblcategorium.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
