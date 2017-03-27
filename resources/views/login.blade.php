@extends('layout')

@section('content')
  @include('errors')

  <form method="POST" action="/login">
  {{ csrf_field() }}
  <div>
    <label>Email</label>
    <input type="email" name="email" required  />
  </div>
  <div>
    <label>Password</label>
    <input type="password" name="password" required  />
  </div>

  <input type="submit" value="Log In" />
  </form>
@endsection
