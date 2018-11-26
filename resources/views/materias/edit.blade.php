@extends('layout')
 
@section('content')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Editar materia
			<a href="{{ route('materias.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
		</h2>
		<hr>

		@include('materias.partials.errors')
	
		{!! Form::model($materia, ['route' => ['materias.update', $materia->id], 'method' => 'PUT', 'files' => 'true']) !!}
			
			@include('materias.partials.form')
			
		{!! Form::close() !!}
	</div>

@endsection