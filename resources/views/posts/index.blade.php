@extends ('layouts.master')
@section ('content')
<div class="col-sm-8 blog-main">
    
    @foreach ($posts as $post)
        @include ('posts.post')
    @endforeach
    
    <nav class="blog-pagination">
        @if (count($posts) < 10)
            <a class="btn btn-outline-secondary disabled" href="">Older</a>
        @else
            <a class="btn btn-outline-primary" href="/?page={{ (int) (request('page')) + 1 }}">Older</a>
        @endif
        @if (request('page') > 1)
        <a class="btn btn-outline-primary" href="/?page={{ (int) (request('page')) - 1 }}"> Newer</a>
        @else
        <a class="btn btn-outline-secondary disabled" href="">Newer</a>
        @endif
    </nav>

</div><!-- /.blog-main -->

@endsection