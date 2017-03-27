@extends('layout')

@section('content')
@include('errors')
<form method="POST" action="/posts">
{{ csrf_field() }}
<div>
  <label>Title</title>
  <input type="text" name="title"  />
<div>
<div>
  <label>Body</label>
  <textarea name="body" required></textarea>
</div>
<input type="submit" value="Publish" />
</form>
@endsection
