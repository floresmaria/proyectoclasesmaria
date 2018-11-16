<div class="form-group">
	{!! Form::label('nombrem', 'Nombre de la materia') !!}
	{!! Form::text('nombrem', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('image', 'Imagen') !!}
	{!! Form::file('image', null) !!}
</div>
<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
