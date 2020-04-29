<!DOCTYPE html>

@yield('nav')
<head>
<title>Burb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid" >
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('main') }}">Burb.com</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('trending') }}">Trending</a></li>
      <li><a href="#">New</a></li>
      <li><a href="#">Pinned</a></li>
      <li><a href="#">Products</a></li>
    </ul>
	@include ('layouts.navAuth')
  </div>
</nav>
  
<div class="container">
  <h3>Trending Posts</h3>
  <p></p>
</div>

</body>





</html>
