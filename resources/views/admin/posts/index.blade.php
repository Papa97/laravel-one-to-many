@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Lista post</h3>

    <div class="row justify-content-center">
        <div>
            <a href="{{route("posts.create")}}"><button type="button" class="btn btn-outline-secondary">Crea post</button></a>
        </div>
        <div class="col-md-12">
            @foreach ($posts as $post)
            <div class="card mt-3">
                <div class="card-header">{{$post->title}}</div>
                <div class="card-body">
                    <p>
                        {{$post->content}} 
                    </p>
                    <div class="pubblished">pubblicato il: {{$post->created_at}}</div>
                    <a href="{{route("posts.show", $post->id)}}"><button type="button" class="btn btn-outline-primary">Vai al post</button></a>
                    <a href="{{route("posts.edit", $post->id)}}"><button type="button" class="btn btn-outline-warning">Modifica il post</button></a>
                    <form action="{{route("posts.destroy", $post->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-outline-danger">Cancella</button>
                      </form>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection