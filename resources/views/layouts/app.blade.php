<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HSV</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-8">
        @include('inc.messages')
          @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
          @include('inc.sidebar')
        </div>
      </div>
    </div>
    <footer id="footer" class="text-center">
     <p>Copy Right 2019 &copy; HSV</p>
    </footer>
  </body>
</html>
