@extends('layout')

@section('content')
	<div class="col-xs-12 ">
		<h2>
			<strong>#{{ $materia->id }}</strong> 
			{{ $materia->nombrem }}   
			<a href="{{ route('materias.index') }}" class="btn btn-default pull-right">		Regresar
			</a> 
		</h2>
		<hr>

		@if($materia->image)
            <img src="{{ $materia->image }}" class="img-responsive">
       	@endif 
       	<br>
		<a href="{{ route('materias.edit', $materia->id) }}" class="btn btn-primary ">
			Editar
		</a> <br><br>
		&nbsp;
	</div>
	
@endsection