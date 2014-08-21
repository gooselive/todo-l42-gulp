@extends('layouts.main')

@section('nav')
<div class="navbar navbar-default">
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav navbar-right">
          <li>{{ HTML::link('logout', 'Logout') }}</li>
    </ul>
  </div>
</div>
@stop

@section('content')
	<h1>Your Items <small>(<a href="{{ URL::route('new') }}">New Task</a>)</small></h1>
<ul>
	@foreach ($items as $item)
		<li><div class="checkbox"><label>
			{{ Form::open() }}
				<input 
				type="checkbox" 
				onclick="this.form.submit()" 
				{{ $item->done ? 'checked' : '' }}
				/>
				<input type="hidden" name="id" value="{{ $item->id }}" />
				{{ e($item->name) }} <small>(<a href="{{ URL::route('delete', $item->id) }}">x</a>)</small>
			{{ Form::close() }}
		</label></div></li>
	@endforeach
</ul>
@stop