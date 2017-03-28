@extends('layout')

@section('content')
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>{{$post->title}}</h3>
        <div>{{$post->created_at}}</div>
      </div>
      <div class="panel-body">
        <div>{{$post->body}}</div>

      @foreach($post->comments as $comment)
        <hr>
        <div>{{ $comment->body }}</div>
        <hr>
      @endforeach


      @include('errors')

      <div>
        <form method="POST" action="/posts/{{$post->id}}/comments">
          {{ csrf_field() }}

          <div class="form-group">
            <textarea name="body" placeholder="Add your comment" class="form-control" required></textarea>
          </div>

          <div class="form-group">
            <input type="submit" value="Add Comment" class="btn btn-primary" />
          </div>
        </form>
      </div>
    </div>

    </div>
@endsection
