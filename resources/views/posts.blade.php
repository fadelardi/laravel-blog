@extends('layout')

@section('content')
  <div>
  @foreach($posts as $post)
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3><a href="/posts/{{ $post->id }}">{{$post->title}}</a></h3>
        <div>Created by <a href="#">{{$post->user->name}}</a> on {{$post->created_at}}</div>
      </div>
      <div class="panel-body">{{$post->body}}</div>
    </div>
  @endforeach
  </div>
@endsection
