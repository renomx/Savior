@extends('layout.index')

@section('content')
	<h1>Create a new API</h1>
	<hr/>
	{!! Form::open(['url' => 'api']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}		
		</div>
		<div class="form-group">
			{!! Form::label('raml', 'RAML:') !!}
			{!! Form::textarea('raml', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Add API', ['class' => 'btn btn-primary form-control']) !!}
		</div>
	{!! Form::close() !!}
@stop