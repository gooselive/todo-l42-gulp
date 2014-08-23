<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		@if (Auth::user())
		<title>{{ Auth::user()->name }}'s To Do List</title>
		@else
		<title>Our Todo Application</title>
		@endif
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/flatly/bootstrap.min.css">
		<link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css') }}">
	</head>

	<body>
		<div class="navbar navbar-inverse">

			<div class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
		      		<span class="icon-bar"></span>
		      		<span class="icon-bar"></span>
		      		<span class="icon-bar"></span>
		    	</button>
		    	@if (Auth::user())
			    <a class="navbar-brand" href="#">To Do &rarr; {{ Auth::user()->name }}</a>
			    @else
				<a class="navbar-brand" href="#">To Do</a>
			    @endif
			</div>
	
		  	<div class="navbar-collapse collapse navbar-inverse-collapse">
		    	<ul class="nav navbar-nav navbar-right">
		    		@yield('nav')
		    	</ul>
		  	</div>
		</div>
		<div class="container">
			@yield('content')
		</div>
	    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>