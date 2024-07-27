<<<<<<< HEAD
@extends('layout')

@section('title','home')

@section('content')
<h2>Home</h2>
@auth
{{auth()->user()->name}}
@endauth
=======
@extends('layout')

@section('title','home')

@section('content')
<h2>Home</h2>
@auth
{{auth()->user()->name}}
@endauth
>>>>>>> 2e7adb7059cdb6e3b5e795935b9ca86404a91428
@endsection