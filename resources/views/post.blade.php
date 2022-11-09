{{-- @dd($post) --}}
@extends('layouts.main')

@section('container')
<h1>SINGEL POST</h1>
<article class="mb-4">
    <h2>{{ $post['judul'] }}</h2>
    <h5>{{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>
</article>

<a href="/blog">Back To All Post</a>
@endsection