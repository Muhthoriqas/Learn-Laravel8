@extends('layouts.main')

@section('container')
<h1>HELLO INI HALAMAN LIST USER</h1>
{{-- <p>{{ $userList }}</p> --}}
<ol>
    @foreach ($userList as $singelUser )
    <li class="text-light">
        <p>Nama User : {{ $singelUser->name}} </p>
        <p>Email User : {{ $singelUser->email}} </p>


    </li>
    @endforeach
</ol>

@endsection