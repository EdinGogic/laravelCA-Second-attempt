<ul class="nav navbar-nav pull-right"> 
@if(Auth::guest())
    <li><a href="{{ route('register') }}">Register</a></li> 
    <li><a href="{{ route('login') }}">Login</a></li> 
	@else
    <li><a href="{{ route('logout') }}">Logout</a></li> 
@endif
</ul>