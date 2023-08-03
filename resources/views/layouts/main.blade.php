<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>@yield('title')</title>
  </head>
  <body class="bg-gray-900 text-white font-sans relative">
    <header class="border-b border-gray-600">
      @include('pages.header')
    </header>
    <div>
      @yield('content')
    </div>
    <footer class="bottom-0 relative w-full border-t border-gray-600">
      @include('pages.footer')
    </footer>
  </body>
</html>