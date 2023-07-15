<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/js/app.js'])

  <script src="https://kit.fontawesome.com/e7badc6d00.js" crossorigin="anonymous"></script>
  <title>@yield('title')</title>
</head>
<body>
  <header id="navbar">
    @include('layouts.navbar')
  </header>
@yield('content')
@include('layouts.footer')
@yield('js')
</body>
</html>
