@extends('layout.index')

@section('content')
<h1>Edit API</h1>
<hr/>
	{!! Form::open(['url' => 'api/update/' . $api->id]) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', $api->name, ['class' => 'form-control']) !!}		
		</div>
		<div class="form-group">
			{!! Form::label('raml', 'RAML:') !!}
			{!! Form::textarea('raml', $api->raml, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Edit API', ['class' => 'btn btn-primary form-control']) !!}
		</div>
	{!! Form::close() !!}
@stop