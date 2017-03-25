@extends('layout')

@section('content')
    <div>
      <h3>{{$post->title}}</h3>
      <div>{{$post->created_at}}</div>
      <div>{{$post->body}}</div>

      <hr>
      <h3>Comments</h3>

      @foreach($post->comments as $comment)
        <div>{{ $comment->body }}</div>
      @endforeach

      <hr>

      @include('errors')

      <div>
        <form method="POST" action="/posts/{{$post->id}}/comments">
          {{ csrf_field() }}

          <div>
            <textarea name="body" placeholder="Add your comment" required></textarea>
          </div>

          <div>
            <input type="submit" value="Add Comment" />
          </div>
        </form>
      </div>

    </div>
@endsection
