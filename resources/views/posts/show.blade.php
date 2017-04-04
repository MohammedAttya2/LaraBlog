@extends ('layouts.master')
    @section ('content')
        <div class="col-sm-8 blog-main">
            <h1>{{ $post->title}}</h1>

            @if (count($post->tag) > 0)
                <ul>
                @foreach ($post->tag as $tag)

                    <li>
                        <a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }}</a>
                    </li>

                @endforeach
                </ul>
            @endif

            <p>{{ $post->body }}</p>

            <hr>

            <ul class="list-group">
            @foreach ($post->comments as $comment)

                <li class="list-group-item">
                    {{ $comment->user->name }} on &nbsp;
                    <strong>
                        {{ $comment->created_at->diffForHumans() }}: &nbsp;
                    </strong> 
                {{ $comment->body }}
                </li>

            @endforeach
            </ul>
            <hr>
            <div class="card">
                <div class="card-block">
                    <form method="POST" action="/posts/{{ $post->id }}/comments">
                        {{ csrf_field() }}
                        <div class="form-group">
                        <textarea name="body" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Comment</button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    @endsection
