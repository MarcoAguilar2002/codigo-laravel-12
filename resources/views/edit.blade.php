@extends('layout')

@section('title', 'Editar Servicio')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 30rem;">
        <div class="card-header">
            <h4 class="mb-0 text-center">Editar Servicio</h4>
        </div>
        <div class="card-body">
            @include('partials.validation-errors')
            <form action="{{ route('servicios.update', $servicio) }}" method="POST">
                @method('PATCH')
                @include('partials.form', ['btnText' => 'Actualizar'])
            </form>
        </div>
    </div>
</div>
@endsection
