<<<<<<< HEAD
@extends('layout')

@section('title', 'Editar Servicio')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 30rem;">
        <div class="card-header">
            @auth
            <h4 class="mb-0 text-center">Editar Servicio</h4>
            @endauth
        </div>
        <div class="card-body">
            @include('partials.validation-errors')
            <form action="{{ route('servicios.update', $servicio) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @include('partials.form', ['btnText' => 'Actualizar'])
            </form>
        </div>
    </div>
</div>
@endsection
=======
@extends('layout')

@section('title', 'Editar Servicio')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 30rem;">
        <div class="card-header">
            @auth
            <h4 class="mb-0 text-center">Editar Servicio</h4>
            @endauth
        </div>
        <div class="card-body">
            @include('partials.validation-errors')
            <form action="{{ route('servicios.update', $servicio) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @include('partials.form', ['btnText' => 'Actualizar'])
            </form>
        </div>
    </div>
</div>
@endsection
>>>>>>> 2e7adb7059cdb6e3b5e795935b9ca86404a91428
