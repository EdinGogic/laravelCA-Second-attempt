<!DOCTYPE html>


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
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('main') }}">Burb.com</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ route('trending') }}">Community Posts</a></li>
      <li><a href="#">Products</a></li>
    </ul>
	@include ('layouts.navAuth')
  </div>
</nav>
  
<div class="container">
  <h3>Welcome to my project!</h3>
  <h4>To post comments in the community form, make sure you're logged in. The reasoning behind this is post moderation. If the post is not linked to the user then people may absuse the form!</h4>
</div>

</body>
  <div class="content-wrapper">
	@yield('content')
  </div>







</html>
