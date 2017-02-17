<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  @yield('css')
</head>
<body>
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Phil's Script Logging</a>
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Search</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"></span>Sign In <span class="glyphicon glyphicon-user"></a></li>
      </ul>
    </div>
  </nav>
  @yield('content')
</body>
</html>
