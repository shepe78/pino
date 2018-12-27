
	<p></p>
	<div class="col-10">
	{!! Form::open(['route'=>'contactos.index', 'method'=>'GET','class'=>"form-inline"]) !!}
		<div class="form-group col-4">
			{!! Form::text('nombre', null, ['class'=>'form-control col-12', 'placeholder'=>'Buscar...']) !!}
			
		</div>
		<button type="submit" class="btn btn-info">Buscar</button>
	{!! Form::close() !!}
</div>