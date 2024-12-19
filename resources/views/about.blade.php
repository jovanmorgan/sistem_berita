@extends('layouts.main')

@section('content') 
 <h1>Ini adalah halaman yang menampilkan tentang kami</h1>
    <h3>Nama : {{ $name }}</h3>
    <p>Nama : {{ $email }}</p>
    <img src="img/{{ $img }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">

 @endsection
