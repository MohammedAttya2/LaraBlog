<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/?page=1">Home</a>
            @if (Auth::check())
                <a class="nav-link" href="/posts/create">New Post</a>
                <a class="nav-link ml-auto" href="/users/{{ Auth::user()->id }}">{{ Auth::user()->name }}</a>
                <a class="nav-link" href="/logout">Log out</a>
            @else
                <a class="nav-link" href="/login">Log in</a>
                <a class="nav-link" href="/register">Register</a>
            @endif
        </nav>
    </div>
</div>