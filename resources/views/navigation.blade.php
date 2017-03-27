<nav>
  <a href="/">Home</a> |
  <a href="/login">Login</a> |
  <a href="/register">Register</a> |
  @if (Auth::check())
    <a href="/logout">Logout</a>
    <div style="margin-left:auto">{{ Auth::user()->name }}</div>
  @endif

</nav>

<hr>
