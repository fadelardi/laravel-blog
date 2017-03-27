@extends('layout')

@section('content')

  @foreach($posts as $post)
    <div>
      <div><a href="/posts/{{ $post->id }}" >{{$post->title}}</a></div>
      <div>{{$post->body}}</div>
      <div>Created by <a href="#">{{$post->user->name}}</a> on {{$post->created_at}}</div>
    </div>
  @endforeach
@endsection
