@extends('layout')

@section('content')
	<div class="col-xs-12 ">
		<h2>
			Lista de materias
			<a href="{{ route('materias.create') }}" class="btn btn-primary pull-right">Nueva</a>
		</h2>
		<hr>
		@include('materias.partials.info')


		<div class="tabla-responsive">

			<table class="table table-hover table-striped">
				<thead>
					<tr class="success">
						<th width="20px">N°</th>
						<th>Nombre de la materia</th>
						<th colspan="3">&nbsp;</th>
					</tr>
				</thead>
				<tbody>

					@foreach($materias as $materia)
					<tr>
						<td>{{ $materia->id }}</td>
						<td>
							<strong>{{ $materia->nombrem }}</strong>
							
						</td>
						<td width="20px">
							<a href="{{ route('materias.show', $materia->id) }}" class="btn btn-info">
								Ver
							</a>
						</td>
						<td width="20px">
							<a href="{{ route('materias.edit', $materia->id) }}" class="btn btn-warning">
								Editar
							</a>
						</td>
						<td width="20px">
							<form action="{{ route('materias.destroy', $materia->id) }}" method="POST">
								{{ csrf_field()}}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-danger">
									Borrar
								</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	
@endsection