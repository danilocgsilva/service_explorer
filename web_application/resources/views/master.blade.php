<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Service Explorer</title>
  </head>
  <body>

    @include('menu')

    @yield('content')

  <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>