@extends('layout')

@section('content')
  @include('errors')
<div class="panel panel-default">
  <div class="panel-heading">
    Register
  </div>
  <div class="panel-body">
    <form method="POST" action="/register">
    {{ csrf_field() }}
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" required  />
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" class="form-control" required  />
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control" required  />
    </div>

    <input type="submit" value="Register" class="btn btn-primary" />
    </form>
  </div>
</div>
@endsection
