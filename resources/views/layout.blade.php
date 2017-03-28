<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css" />
        <title>Blog App</title>
    </head>
    <body>
        <div class="container">
          @include('navigation')
          <div class="container-fluid">
            <div class="col-md-10">
              @yield('content')
            </div>
            <div class="col-md-2">
              @include('archive')
            </div>
          </div>
        </div>
    </body>
</html>
