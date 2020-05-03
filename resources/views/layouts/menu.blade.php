<head>
    <title>Burb</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<nav class="navbar navbar-inverse">
    <div class="container-fluid" >
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('main') }}">Burb.com</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ route('products.displaygrid') }}">Products</a></li>
        </ul>
        @include ('layouts.navAuth')
    </div>
</nav>
@yield('content')
