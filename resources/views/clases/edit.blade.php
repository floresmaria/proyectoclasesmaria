@extends('layout')

@section('content')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Editar clase
			<a href="{{ route('clases.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
		</h2>
		<hr>

		@include('clases.partials.errors')
	
		{!! Form::model($clase, ['route' => ['clases.update', $clase->id], 'method' => 'PUT', 'files' => 'true']) !!}
			
			@include('clases.partials.form')
			
		{!! Form::close() !!}
	</div>

@endsection