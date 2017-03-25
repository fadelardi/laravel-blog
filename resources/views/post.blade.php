@extends('layout')

@section('content')
    <div>
      <div>{{$post->created_at}}</div>
      <div>{{$post->body}}</div>

      <hr>

      @foreach($post->comments as $comment)
        <div>{{ $comment->body }}</div>
      @endforeach

    </div>
@endsection
