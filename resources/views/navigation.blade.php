 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="/">Home</a></li>
      <li><a href="/login">Login</a></li>
      <li><a href="/register">Register</a></li>
      @if (Auth::check())
        <li><a href="/posts/create">Create Post</a></li>
        <li><a href="/logout">Logout</a></li>
      @endif
    </ul>

    @if (Auth::check())
      <div style="margin-left:auto">{{ Auth::user()->name }}</div>
    @endif
  </div>
</nav>
