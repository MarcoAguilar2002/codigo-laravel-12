<<<<<<< HEAD
@extends('layout')

@section('title', 'Servicio |' . $servicio->titulo)

@section('content')
    @auth
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="card" style="width: 18rem;">
                @if ($servicio->image)
                    <img src="/storage/{{ $servicio->image }}" class="card-img-top" alt="{{ $servicio->titulo }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $servicio->titulo }}</h5>
                    <p class="card-text">{{ $servicio->descripcion }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $servicio->created_at->diffForHumans() }}</li>
                </ul>
                <div class="card-body">
                    <div class="text-center">
                        <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-warning"><i class="bi bi-pencil"></i>
                            Editar</a>
                        <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-archive"></i> Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection
=======
@extends('layout')

@section('title', 'Servicio |' . $servicio->titulo)

@section('content')
    @auth
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="card" style="width: 18rem;">
                @if ($servicio->image)
                    <img src="/storage/{{ $servicio->image }}" class="card-img-top" alt="{{ $servicio->titulo }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $servicio->titulo }}</h5>
                    <p class="card-text">{{ $servicio->descripcion }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $servicio->created_at->diffForHumans() }}</li>
                </ul>
                <div class="card-body">
                    <div class="text-center">
                        <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-warning"><i class="bi bi-pencil"></i>
                            Editar</a>
                        <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-archive"></i> Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection
>>>>>>> 2e7adb7059cdb6e3b5e795935b9ca86404a91428
