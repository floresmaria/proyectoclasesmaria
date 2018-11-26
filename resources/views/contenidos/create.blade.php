@extends('layout')

@section('content')
	<div class="col-xs-12">
		<h2>
			Nuevo contenido
			<a href="{{ route('contenidos.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
		</h2>

		@include('contenidos.partials.errors')

		{!! Form::open(['route' => 'contenidos.store', 'files' => 'true']) !!}
			
			@include('contenidos.partials.form')
			
		{!! Form::close() !!}
		
	</div>

@endsection