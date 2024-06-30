@extends('layout')

@section('title','Servicio |' .$servicio->titulo)

@section('content')

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card w-50">
        <div class="card-body">
            <h3 class="card-title text-center">{{$servicio->titulo}}</h3>
            <h5>Descripción:</h5>
            <p class="card-text">{{$servicio->descripcion}}</p>
            <h5>Publicado:</h5>
            <p class="card-text"><small class="text-muted"> {{ $servicio->created_at->diffForHumans() }}</small></p>

            <div class="text-center">
                <a href="{{route('servicios.edit', $servicio)}}" class="btn btn-warning"><i class="bi bi-pencil"></i> Editar</a>
                <form action="{{route('servicios.destroy',$servicio)}}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-archive"></i> Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection