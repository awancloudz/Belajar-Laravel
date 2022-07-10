@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <h5>By: Awan in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
    <p>{{ $post->body }}</p>
</article>
<a href="/posts">Back</a>
@endsection