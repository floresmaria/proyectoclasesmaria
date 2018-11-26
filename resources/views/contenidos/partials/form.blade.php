<div class="form-group">
	{!! Form::label('nombrec', 'Nombre del  contenido') !!}
	{!! Form::text('nombrec', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('objetivo', 'Objetivo del  contenido') !!}
	{!! Form::text('objetivo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
 