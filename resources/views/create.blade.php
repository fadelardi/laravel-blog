@extends('layout')

@section('content')
@include('errors')
<div class="panel panel-default">
  <div class="panel-heading">
      Create Post
  </div>
  <div class="panel-body">
    <form method="POST" action="/posts">
      {{ csrf_field() }}
      <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required  />
      </div>
      <div class="form-group">
        <label>Body</label>
        <textarea name="body" class="form-control" required></textarea>
      </div>
      <input type="submit" value="Publish" class="btn btn-primary" />
    </form>
  </div>
</div>
@endsection
