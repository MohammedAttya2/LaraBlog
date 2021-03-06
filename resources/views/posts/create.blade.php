@extends ('layouts.master')
@section ('content')
    <div class="col-sm-8 blog-main">

        <div class="container">
            <h1>Publish a post</h1>
        </div>

        <hr>

        <form action="/posts" method="POST">

            {{ csrf_field() }}

          <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" placeholder="New Post" name="title">
          </div>

          <div class="form-group">
            <label for="body">Body:</label>
            <textarea id="body" class="form-control" name="body"></textarea>
          </div>

            <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
          </div>
            @include ('layouts.errors')
        </form>


    </div>
@endsection