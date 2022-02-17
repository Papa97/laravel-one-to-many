@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Titolo: {{$post->title}}</h1>
    <div>slug: {{$post->slug}}</div>
    <p>{{$post->content}}</p>
        @if ($post->published == true)
            <div>pubblicato</div>
        @else
            <div>non pubblicato</div>
        @endif

    <div>{{$post->category_id}}</div>
</div>

@endsection