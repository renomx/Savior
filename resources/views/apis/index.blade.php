@extends('layout.index')

@section('content')
<h1>API List</h1>
<div class="row">
	@foreach ($api as $a)
		<div class="col-md-4">		    
		    <span>{{ $a->name }}</span>		
		    <a href="/api/edit/{{ $a->id }}" class="btn btn-warning">Editar</a>     
	    </div>
	@endforeach
</div>
@stop