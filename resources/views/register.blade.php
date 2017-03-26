@extends('layout')

@section('content')
  @include('errors')

  <form method="POST" action="/register">
  {{ csrf_field() }}
  <div>
    <label>Name</label>
    <input type="text" name="name" required  />
  </div>
  <div>
    <label>Email</label>
    <input type="email" name="email" required  />
  </div>
  <div>
    <label>Password</label>
    <input type="password" name="password" required  />
  </div>

  <input type="submit" value="Register" />
  </form>
@endsection
