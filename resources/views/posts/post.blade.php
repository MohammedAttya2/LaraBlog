<div class="blog-post">

    <h2 class="blog-post-title">
        <a href="/posts/{{$post->id}}">
            {{ $post->title}}
        </a>
    </h2>

    <p class="blog-post-meta"><a href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a> on {{ $post->created_at->toFormattedDateString() }}</p>

    <p>{{ $post->body }}</p>

</div>