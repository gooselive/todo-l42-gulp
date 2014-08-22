@extends('layouts.main')

@section('nav')
   	<li>{{ HTML::link('register', 'Register') }}</li>
@stop

@section('content')
	{{ Form::open(['autocomplete' => 'off']) }}
	<div class="form-group">
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', '', array('class' => 'form-control', 'placeholder' => 'Username')) }}
    </div>
<!--	<input type="text" name="username" placeholder="Username" />
-->	<div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
    </div>
<!--    <input type="password" name="password" placeholder="Password" />
-->    <div class="form-group">
        {{ Form::submit('Sign in', array('class' => 'btn btn-success')) }}
        {{ HTML::link('/', 'Cancel', array('class' => 'btn btn-danger')) }}	
<!--	<input type="submit" value="Sign in" />
-->	{{ Form::close() }}

@stop
