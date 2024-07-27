@extends('layout')

@section('title','servicios')

@section('content')

<div class="d-flex justify-content-center mt-3 fw-bold position-relative">
    <h2 class="text-center w-100">Servicios</h2>
    @auth
    <a href="{{ route('servicios.create') }}" class="btn btn-primary position-absolute end-0 me-3"> <i class="bi bi-plus-lg"></i> Añadir Servicio</a>
    @endauth
</div>

<div class="d-flex justify-content-center mt-4">
    <div class="w-75">
        <table class="table ">
            <thead class="table-light">
                <tr>
                    <th class="text-center">Imagen</th>
                    <th class="text-center">Título</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @if($servicios && count($servicios) > 0)
                    @foreach($servicios as $servicio)
                        <tr>
                            <td class="text-center">
                                @if($servicio->image)
                                <img src="/storage/{{$servicio->image}}" alt="{{$servicio->titulo}}" width="auto" height="50">
                                @endif
                            </td>
                            <td class="text-center">{{ $servicio->titulo }}</td>
                            <td class="text-center">
                                <a href="{{ route('servicios.show', $servicio) }}" class="btn btn-primary"><i class="bi bi-eye"></i> Ver Servicio</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="2" class="text-center">No hay servicios que mostrar</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <div class="d-flex justify-content-center mt-3">
            {{ $servicios->links('vendor.pagination.bootstrap-5') }}
        </div>
    </div>
</div>

@endsection