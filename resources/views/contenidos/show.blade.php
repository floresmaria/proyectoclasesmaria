@extends('layout')
 
@section('content')
	<div class="col-xs-12 ">
		<h2>
			<strong>#{{ $contenido->id }}</strong> 
			{{ $contenido->nombrec }}   
			{{ $contenido->objetivo }}   
			<a href="{{ route('contenidos.index') }}" class="btn btn-default pull-right">		Regresar
			</a> 
		</h2>
		<hr>

		
       	<br>
		<a href="{{ route('contenidos.edit', $contenido->id) }}" class="btn btn-primary ">
			Editar
		</a> <br><br>
		&nbsp;
	</div>
	
@endsection