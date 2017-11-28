<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<link href="{{ asset('css/materialize.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/auth-custom.css')}}">
</head>
<body>
	{{-- Navigation --}}
	<nav>
	    <div class="nav-wrapper">
	      <a href="#" class="brand-logo center">
	      	<img src="{{ asset('images/logo.png')}}" width="100" class="logo">
	      </a>
	    </div>
  	</nav>
  	
  	@yield('content')

	<script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('js/materialize.js')}}"></script>
</body>
</html>