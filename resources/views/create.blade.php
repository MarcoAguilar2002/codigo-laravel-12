<<<<<<< HEAD
@extends('layout')

@section('title', 'Crear Servicio')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 30rem;">
        <div class="card-header">
            <h4 class="mb-0 text-center">Crear nuevo servicio</h4>
        </div>
        <div class="card-body">
            @include('partials.validation-errors')
            <form action="{{ route('servicios.store') }}" method="post" enctype="multipart/form-data">
                @include('partials.form', ['btnText' => 'Guardar'])
            </form>
        </div>
    </div>
</div>
@endsection
=======
@extends('layout')

@section('title', 'Crear Servicio')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 30rem;">
        <div class="card-header">
            <h4 class="mb-0 text-center">Crear nuevo servicio</h4>
        </div>
        <div class="card-body">
            @include('partials.validation-errors')
            <form action="{{ route('servicios.store') }}" method="post" enctype="multipart/form-data">
                @include('partials.form', ['btnText' => 'Guardar'])
            </form>
        </div>
    </div>
</div>
@endsection
>>>>>>> 2e7adb7059cdb6e3b5e795935b9ca86404a91428
