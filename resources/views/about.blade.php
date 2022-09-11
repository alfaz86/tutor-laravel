@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <h5>{{ $email }}</h5>
    <img src="img/{{ $img }}" alt= {{ $name }} width="300" class="img-thumb rounded-circle mt-3">
@endsection