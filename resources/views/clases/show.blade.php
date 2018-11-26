@extends('layout')
 
@section('content')
	<div class="col-xs-12 ">
		<h2>	
			<a href="{{ route('clases.index') }}" class="btn btn-default pull-right">		Regresar
			</a> 
		</h2><br>
		<br>
		<table class="table table-hover table-striped">
				<thead>
					<tr class="success">
						<th width="20px">N°</th>
						<th>Materia_id</th>
						<th>Contenido_id</th>
						<th>Nombre Clase</th>
						<th>Profesor</th>
						<th>Cupos</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><strong>{{ $clase->id }}</strong> </td>
						<td>{{ $clase->materia_id }}  </td>
						<td>{{ $clase->contenido_id }}</td>
						<td>{{ $clase->nombreclase }} </td>
						<td>{{ $clase->profesor }} </td>
						<td>{{ $clase->cupos }}  </td>
					</tr>
				</tbody>
			</table>
		
		<hr>

		
       	<br>
		<a href="#" class="btn btn-primary ">
			Editar
		</a> <br><br>
		&nbsp;
	</div>
	
@endsection