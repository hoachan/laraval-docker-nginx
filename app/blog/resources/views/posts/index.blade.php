@extends('layout.layout')

@section('content')
    <h1>My Application</h1>
    <a href="/posts/create" class="btn btn-primary" role="button"> Create a Post </a>
    <hr>
    
    <div class="col-sm-8 blog-min">
        @foreach($posts as $post)
            @include('posts.post')
        @endforeach
    </div>
@endsection