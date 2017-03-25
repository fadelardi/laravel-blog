@extends('layout')

@section('content')

  @foreach($posts as $post)
    <div>
      <div><a href="/posts/{{ $post->id }}" >{{$post->title}}</a></div>
      <div>{{$post->created_at}}</div>
      <div>{{$post->body}}</div>
    </div>
  @endforeach
@endsection
