@extends('layout')

@section('content')
    <div>
      <div>{{$post->created_at}}</div>
      <div>{{$post->body}}</div>
    </div>
@endsection
