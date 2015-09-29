@extends('layout.index')

@section('content')
<h1>Dashboard</h1>
<div class="row">
    <div class="col-md-12">
        <a href="/api/create" class="btn btn-success">Create new API</a>
        <h3>Your APIs</h3>
        <div class="row">
            @foreach ($api as $a)
                <div class="col-md-4" style="padding: 10px;">                                                
                    <a href="/api/edit/{{ $a->id }}" class="btn btn-warning">Editar {{ $a->name }}</a>        
                </div>
            @endforeach
        </div>       
    </div>
</div>
@stop