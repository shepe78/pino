
	<p></p>
	<div class="col-10">
	{!! Form::open(['route'=>'expedientes.index', 'method'=>'GET','class'=>"form-inline"]) !!}
		<div class="form-group col-4">
			{!! Form::text('razon_social', null, ['class'=>'form-control col-12', 'placeholder'=>'Buscar...']) !!}
			
		</div>
		<button type="submit" class="btn btn-info">Buscar</button>
	{!! Form::close() !!}
</div>