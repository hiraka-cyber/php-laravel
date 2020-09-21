<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bulletin board</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
  </head>
  <body>
    <header class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="{{url('')}}">
          Bulletin board
        </a>
      </div>
    </header>
    <div class="">
      @yield('content')
    </div>
  </body>
</html>
