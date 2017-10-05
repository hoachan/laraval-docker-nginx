@extends('layout.layout')

@section('content')
    <form method="POST" action="/posts/store">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Email" name="title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    @include('layout.errors')
@endsection