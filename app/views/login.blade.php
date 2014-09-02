@extends('layouts.main')

@section('nav')
   	<li>{{ HTML::link('register', 'Register') }}</li>
@stop

@section('content')
	{{ Form::open(['autocomplete' => 'off']) }}
    @if($errors->any())
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </div>
    @endif    
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
--> <div class="form-group">
        {{ Form::submit('Sign in', array('class' => 'btn btn-success')) }}
        {{ HTML::link('/', 'Cancel', array('class' => 'btn btn-danger')) }}	
    </div>
<!--	<input type="submit" value="Sign in" />
-->	{{ Form::close() }}

@stop
