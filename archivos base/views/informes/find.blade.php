
	<p></p>
	<div class="col-10">
	{!! Form::open(['route'=>'informes.index', 'method'=>'GET','class'=>"form-inline"]) !!}
		<div class="form-group col-4">
			{!! Form::text('id', null, ['class'=>'form-control col-12', 'placeholder'=>'Buscar...']) !!}
			
		</div>
		<button type="submit" class="btn btn-info">Buscar</button>
	{!! Form::close() !!}
</div>