{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')

<h1>Halaman Blogs</h1>
<article class="mb-4">
    @foreach ($posts as $post )

    <h2 class="text-success">
        <a href="/blog/{{ $post['slug'] }}">{{ $post['judul'] }}</a>
    </h2>
    <h5>{{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>
</article>




@endforeach

@endsection