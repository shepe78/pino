	<p></p>
	<div class="col-12">
	{!! Form::model(Request::only(['razon_social','tipo']), ['route'=>'clientes.index', 'method'=>'GET','class'=>"form-inline"]) !!} 
		
		<div class="form-group">
			{!! Form::text('razon_social', null, ['class'=>'form-control ', 'placeholder'=>'Buscar...']) !!}		
		</div>
		&nbsp &nbsp &nbsp	
		{{-- <div class="form-group">
			{!! Form::label('tipo', 'Tipo:') !!}
            {!! Form::select('tipo', [''=>'Todos...','Promotor'=>'Promotor','Asesor'=>'Asesor','Analista'=>'Analista'], null, ['class' => 'form-control'])!!}
		</div> --}}

		&nbsp
		
		<button type="submit" class="btn btn-info" style="background-color: #039BE5">Buscar</button>
	{!! Form::close() !!}
		
</div>