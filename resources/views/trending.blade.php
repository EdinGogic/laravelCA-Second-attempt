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
      <li class="active"><a href="{{ route('trending') }}">Community Posts</a></li>
      <li><a href="#">Products</a></li>
    </ul>
	@include ('layouts.navAuth')
  </div>
</nav>
  


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="w3-theme-l5">

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
	<div class="w3-col m3 w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom">
	<h3> Welcome To my project!</h3>
	<p>Here you can see a list of posts from the community. Feel free to add to it if you are logged in! </p>
	</div>


    <!-- Middle Column -->
    <div class="w3-col m7">
	@include('includes.message-block')
	<section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
		
            <header><h3>What do you have to say?</h3></header>
            <form action="{{route('post.create')}}" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your Post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
        </div>
    </section>
	@foreach($posts as $post)
		<article class="post">
		<div class="w3-white w3-round"><br>
		<span class="w3-right w3-opacity">Posted at {{$post->updated_at}}</span>
        <h4>Posted by: {{$post->user->name}}</h4><br>
        <hr class="w3-clear">
        <p>{{$post->body}}</p>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
		<br>

<!--       </div> 
		<p>{{$post->body}}</p>
		<div class=info>
//		Posted at {{$post->updated_at}}
		</div>
	</article>
-->	@endforeach



		
          <div class="w3-row-padding" style="margin:0 -16px">


</body>


</html>
