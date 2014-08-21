@extends('layouts.main')

@section('nav')
<div class="navbar navbar-default">
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav navbar-right">
    	<li>{{ HTML::link('register', 'Register') }}</li>
    </ul>
  </div>
</div>

@section('content')
	{{ Form::open(['autocomplete' => 'off']) }}
	<input type="text" name="username" placeholder="Username" />
	<input type="password" name="password" placeholder="Password" />
	<input type="submit" value="Sign in" />
	{{ Form::close() }}

@stop
