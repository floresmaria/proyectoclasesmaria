@extends('layout')

@section('content')
	<div class="col-xs-12">
		<h2>
			Nueva clase
			<a href="{{ route('clases.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
		</h2>

		@include('clases.partials.errors')

		{!! Form::open(['route' => 'clases.store', 'files' => 'true']) !!}
			
			@include('clases.partials.form')
			
		{!! Form::close() !!}
		
	</div>

@endsection