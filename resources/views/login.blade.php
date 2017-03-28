@extends('layout')

@section('content')
  @include('errors')
  <div class="panel panel-default">
    <div class="panel-heading">
      Sign in
    </div>
    <div class="panel-body">
      <form method="POST" action="/login">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" required  />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" required  />
      </div>

      <input type="submit" value="Log In" class="btn btn-primary" />
      </form>
    </div>
  </div>
@endsection
