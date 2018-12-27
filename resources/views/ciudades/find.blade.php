	<p></p>
	<div class="col-10">
	{!! Form::open(['route'=>'ciudades.index', 'method'=>'GET','class'=>"form-inline"]) !!}
		<div class="form-group col-4">
			{!! Form::text('descripcion', null, ['class'=>'form-control col-12', 'placeholder'=>'Buscar...']) !!}
			
		</div>
		<button type="submit" class="btn btn-info" style="background-color: #039BE5">Buscar</button>
	{!! Form::close() !!}
</div>