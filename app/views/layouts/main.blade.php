<!DOCTYPE html>
<html lang="en" ng-app="style" ng-controller="StyleController">
	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		@if (Auth::user())
		<title>{{ Auth::user()->name }}'s To Do List</title>
		@else
		<title>Our Todo Application</title>
		@endif
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular-cookies.min.js"></script>
		<script src="assets/js/controllers.js"></script>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
		@include('bootswatch')
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
		    		<li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bootswatch theme <b class="caret"></b></a>
				      <!-- Bootswatch theme selection -->
				      <ul class="dropdown-menu">
				      	<li ng-repeat="style in styles"><span ng-bind="style.title" ng-class="{active: style.selected}" ng-click="selectStyle(style.title)"></span></li>
				      </ul>
				    </li>
		    		@yield('nav')
		    	</ul>
		  	</div>
		</div>
		<div class="container">
			@yield('content')
		</div>

		<div class="footer">
			<div class="container">
				<p class="text-muted">&copy;2014 <a href="http://gooselive.github.io">gooselive</a><span class="aright"><a href="//bootswatch.com">Theme: </a><span ng-bind="currentStyle"></span></span></p>
			</div>
		</div>
		
	    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	    <!--<script src="assets/js/main.min.js"></script>-->
	</body>
</html>