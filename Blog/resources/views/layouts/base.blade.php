
<!DOCTYPE html>
<html lang="en">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="framework/12bool.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <title>BLOG</title>
</head>
<body>
  
  <header>
     @include('components.header')
  </header>
  
  <div class="content">
    @yield('content')
  </div>

  <footer>
    @include('components.footer')
  </footer>

</body>
</html>