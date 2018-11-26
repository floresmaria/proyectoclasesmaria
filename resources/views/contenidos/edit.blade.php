@extends('layout')

@section('content')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Editar contenido
			<a href="{{ route('contenidos.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
		</h2>
		<hr>

		@include('contenidos.partials.errors')
	
		{!! Form::model($contenido, ['route' => ['contenidos.update', $contenido->id], 'method' => 'PUT', 'files' => 'true']) !!}
			
			@include('contenidos.partials.form')
			
		{!! Form::close() !!}
	</div>

@endsection