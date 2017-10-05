<div class="blog-post">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>
    <p>{{$post->body}}</p>
</div>
<hr>
<div class="comments">
    @foreach($post->comments as $comment)
        <article>
            {{$comment->body}}
        </article> 
    @endforeach
</div>
<hr>