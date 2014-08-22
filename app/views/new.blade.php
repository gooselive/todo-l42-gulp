@extends('layouts.main')

@section('nav')
@stop

@section('content')
	<h1>Create New Task</h1>

	@foreach ($errors->all() as $error)
		<p class="error">{{ $error }}</p>
	@endforeach

	{{ Form::open() }}
		<div class="form-group">
            {{ Form::label('taskname', 'Task name') }}
            {{ Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'The name of your task')) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Create', array('class' => 'btn btn-success')) }}
            {{ HTML::link('/', 'Cancel', array('class' => 'btn btn-danger')) }}
        </div>
	{{ Form::close() }}
@stop