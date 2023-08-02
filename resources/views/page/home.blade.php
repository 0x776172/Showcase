<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Home | Practice</title>
  </head>
  <body>
    <div>
      <header>
        @include('page.navbar')
      </header>
      <div class="h-screen flex align-bottom">
        <h1 class="text-3xl font-bold underline">
          Hello world!
        </h1>
        <p class="underline">{{ $name }}</p>
      </div>
    </div>
  </body>
  
</html>