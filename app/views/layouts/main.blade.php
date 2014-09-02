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
		<link rel="alternate stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/flatly/bootstrap.min.css" title="flatly">
		<link rel="alternate stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/amelia/bootstrap.min.css" title="amelia">
		<link rel="alternate stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/cerulean/bootstrap.min.css" title="cerulean">
		<link rel="alternate stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/cosmo/bootstrap.min.css" title="cosmo">
		<link rel="alternate stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/cyborg/bootstrap.min.css" title="cyborg">
		<link rel="alternate stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/darkly/bootstrap.min.css" title="darkly">
		<link rel="alternate stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/journal/bootstrap.min.css" title="journal">
		<link rel="alternate stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/lumen/bootstrap.min.css" title="lumen">
		<link rel="alternate stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/paper/bootstrap.min.css" title="paper">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/readable/bootstrap.min.css" title="readable">
		<link rel="alternate stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/sandstone/bootstrap.min.css" title="sandstone">
		<link rel="alternate stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/simplex/bootstrap.min.css" title="simplex">
		<link rel="alternate stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/slate/bootstrap.min.css" title="slate">
		<link rel="alternate stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/spacelab/bootstrap.min.css" title="spacelab">
		<link rel="alternate stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/superhero/bootstrap.min.css" title="superhero">
		<link rel="alternate stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/united/bootstrap.min.css" title="united">
		<link rel="alternate stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/yeti/bootstrap.min.css" title="yeti">
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
				        <li><span class="toggle" id="amelia" onclick="setActiveStyleSheet('amelia');">Amelia</span></li>
				        <li><span class="toggle" id="cerulean" onclick="setActiveStyleSheet('cerulean')">Cerulean</span></li>
				        <li><span class="toggle" id="cosmo" onclick="setActiveStyleSheet('cosmo')">Cosmo</span></li>
				        <li><span class="toggle" id="cyborg" onclick="setActiveStyleSheet('cyborg')">Cyborg</span></li>
				        <li><span class="toggle" id="darkly" onclick="setActiveStyleSheet('darkly')">Darkly</span></li>
				        <li><span class="toggle" id="flatly" onclick="setActiveStyleSheet('flatly')">Flatly</span></li>
				        <li><span class="toggle" id="journal" onclick="setActiveStyleSheet('journal')">Journal</span></li>
				        <li><span class="toggle" onclick="setActiveStyleSheet('lumen')">Lumen</span></li>
				        <li><span class="toggle" id="lumen" onclick="setActiveStyleSheet('paper')">Paper</span></li>
				        <li><span class="toggle" id="readable" onclick="setActiveStyleSheet('readable')">Readable</span></li>
				        <li><span class="toggle" id="sandstone" onclick="setActiveStyleSheet('sandstone')">Sandstone</span></li>
				        <li><span class="toggle" id="simplex" onclick="setActiveStyleSheet('simplex')">Simplex</span></li>
				        <li><span class="toggle" id="slate" onclick="setActiveStyleSheet('slate')">Slate</span></li>
				        <li><span class="toggle" id="spacelab" onclick="setActiveStyleSheet('spacelab')">Spacelab</span></li>
				        <li><span class="toggle" id="superhero" onclick="setActiveStyleSheet('superhero')">Superhero</span></li>
				        <li><span class="toggle" id="yeti" id="united" onclick="setActiveStyleSheet('united')">United</span></li>
				        <li><span class="toggle" onclick="setActiveStyleSheet('yeti')">Yeti</span></li>
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
				<p class="text-muted">&copy;2014 <a href="http://gooselive.github.io">gooselive</a><span class="aright"><a href="//bootswatch.com">Theme: </a><span id="theme"></span></span></p>
			</div>
		</div>
		
	    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	    <script src="assets/js/main.min.js"></script>
	</body>
</html>