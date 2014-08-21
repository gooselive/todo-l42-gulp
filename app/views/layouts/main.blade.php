<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Our Todo Application</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/cerulean/bootstrap.min.css">
		<link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css') }}">
	</head>

	<body>
			@yield('nav')
		<div class="container">
			@yield('content')
		</div>
	    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>