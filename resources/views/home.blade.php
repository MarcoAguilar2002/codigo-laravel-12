@extends('layout')

@section('title','home')

@section('content')
<h2>Home</h2>
@auth
{{auth()->user()->name}}
@endauth
@endsection