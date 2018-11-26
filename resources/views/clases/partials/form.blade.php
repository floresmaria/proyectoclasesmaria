<div class="form-group">
	{!! Form::label('materia_id', 'Nombre de la  materia') !!}
	{!! Form::text('materia_id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('contenido_id', 'Nombre del contenido') !!}
	{!! Form::text('contenido_id', null, ['class' => 'form-control']) !!}
</div>



<div class="form-group">
	{!! Form::label('nombreclase', 'Ingrese el nombre de la clase') !!}
	{!! Form::text('nombreclase', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('profesor', 'Ingrese el nombre del profesor a dictar la clase') !!}
	{!! Form::text('profesor', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('cupos', 'Ingrese el número de cupos disponibles') !!}
	{!! Form::text('cupos', null, ['class' => 'form-control']) !!}
</div>



<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
   