@extends('layout') 
 
@section('content')
	<div class="col-xs-12">
		<h2>
			Nueva materia
			<a href="{{ route('materias.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
		</h2>

		@include('materias.partials.errors')

		{!! Form::open(['route' => 'materias.store', 'files' => 'true']) !!}
			
			@include('materias.partials.form')
			
		{!! Form::close() !!}
		
	</div>

@endsection