@extends('layouts.main')

@section('nav')
	<li>{{ HTML::link('logout', 'Logout') }}</li>
@stop

@section('content')
<!--	<h1>Your Items <small>(<a href="{{ URL::route('new') }}">New Task</a>)</small></h1> -->
<div>
<ul class="panel panel-success todo">
	@foreach ($items as $item)
		<li><div class="checkbox"><label>
			{{ Form::open() }}
				<input 
				type="checkbox" 
				onclick="this.form.submit()" 
				{{ $item->done ? 'checked' : '' }}
				/>
				<input type="hidden" name="id" value="{{ $item->id }}" />
				{{ e($item->name) }} <a href="{{ URL::route('delete', $item->id) }}"><i class="fa fa-trash-o fa-lg"></i></a>
			{{ Form::close() }}
		</label></div></li>
	@endforeach
</ul>
</div>
<div>
	<a href="{{ URL::route('new') }}" class="btn btn-success btn-lg btn-block">New Task</a>
</div>
@stop