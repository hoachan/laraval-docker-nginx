<div class="blog-post">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->created_at }}</p>
    <p><span style="color : red;">create user :</span> {{ $post->user->name }}</p>
    <article>
        <h2>Post Content :</h2>
        <p><p>{{$post->body}}</p></p>
    </article>
</div>

<div class="comments">
    @foreach($post->comments as $comment)
        <article>
            <h3>Comment content </h3>
            <p>{{$comment->body}}</p>
        </article> 
    @endforeach
</div>
<hr>