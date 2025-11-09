<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('layout.bootstrap')
</head>
<body class="bg-light">


  @include('layout.header')

  
    @yield('content')
  

  @include('layout.footer')

</body>
</html>