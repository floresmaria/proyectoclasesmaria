@extends('layout')  

@section('content')
	<div class="col-xs-12 ">
		<h2>
			Lista de clases
			<a href="{{ route('clases.create') }}" class="btn btn-primary pull-right">Nueva</a>
		</h2>
		<hr>
		@include('clases.partials.info')


		<div class="tabla-responsive">

			<table class="table table-hover table-striped">
				<thead>
					<tr class="success">
						<th width="20px">N°</th>
						<th>Nombre de la clase</th>
						<th colspan="3">&nbsp;</th>
					</tr>
				</thead>
				<tbody>

					@foreach($clases as $clase)
					<tr>
						<td>{{ $clase->id }}</td>
						<td>
							<strong>{{ $clase->nombreclase }}</strong>
						</td>
						<td width="20px">
							<a href="{{ route('clases.show', $clase->id) }}" class="btn btn-info">
								Ver
							</a>
						</td>
						<td width="20px">
							<a href="#" class="btn btn-warning">
								Editar
							</a>
						</td>
						
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	
@endsection