<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@extends('layouts.app')

@section('template_title')
    Proyecto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Proyecto disponibles') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('proyectos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Empieza Un Proyecto') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                    @foreach ($proyectos as $proyecto)
                                        <div>
                                            <div class="card" style="width: 18rem;">
                                                <img src="{{asset('storage').'/'.$proyecto->imgpry }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h1 >{{ $proyecto->nombrepry }}</h1>  
                                                    <p class="card-text">Categoria: {{ $proyecto->tblcategorium->nombre_c }}</p><br>
                                                    <p class="card-text" style="-webkit-line-clamp: 2;">{{ $proyecto->descripcion }}</p><br>
                                                   
                                                    <h1 >cantidad solicitada: $ pendiente jajaj</h1>  
                                                    
                                                    <form action="{{ route('proyectos.destroy',$proyecto->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('proyectos.show',$proyecto->id) }}"><i class="fa fa-fw fa-eye"></i>Ver Mas</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('proyectos.edit',$proyecto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar infromacion</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
    
                                    @endforeach
                                
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proyectos->links() !!}
            </div>
        </div>
    </div>
    
@endsection

 