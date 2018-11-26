@extends('layout')  

@section('content')
	<div class="col-xs-12 ">
		<h2>
			Lista de contenidos
			<a href="{{ route('contenidos.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		<hr>
		@include('contenidos.partials.info')


		<div class="tabla-responsive">

			<table class="table table-hover table-striped">
				<thead>
					<tr class="success">
						<th width="20px">N°</th>
						<th>Nombre del contenido</th>
						<th colspan="3">&nbsp;</th>
					</tr>
				</thead>
				<tbody>

					@foreach($contenidos as $contenido)
					<tr>
						<td>{{ $contenido->id }}</td>
						<td>
							<strong>{{ $contenido->nombrec }}</strong>
							
						</td>
						<td width="20px">
							<a href="{{ route('contenidos.show', $contenido->id) }}" class="btn btn-info">
								Ver
							</a>
						</td>
						<td width="20px">
							<a href="{{ route('contenidos.edit', $contenido->id) }}" class="btn btn-warning">
								Editar
							</a>
						</td>
						<td width="20px">
							<form action="{{ route('contenidos.destroy', $contenido->id) }}" method="POST">
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