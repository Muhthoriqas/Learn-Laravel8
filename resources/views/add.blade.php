@extends('layouts.main')

@section('container')
<h1 style="color:  green">INI HALAMAN TAMBAH </h1>
<h1>{{ $nama }}</h1>
<h1>Umur Saya : {{ $Umur }}</h1>
<img src="assets/image1.jpg" alt="" width="200px" height="200px">
<img src="{{ $image }}" alt="" onclick="mike()">
@endsection