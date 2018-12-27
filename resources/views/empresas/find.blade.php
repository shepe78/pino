	<p></p>
	<div class="col-12">
	{!! Form::model(Request::only(['razon_social','tipo','plaza']), ['route'=>'empresas.index', 'method'=>'GET','class'=>"form-inline"]) !!} 
		
		<div class="form-group">
			{!! Form::text('razon_social', null, ['class'=>'form-control ', 'placeholder'=>'Buscar...']) !!}		
		</div>
		&nbsp &nbsp &nbsp	
		<div class="form-group">
			{!! Form::label('plaza_id', 'Plaza:') !!}
            {!! Form::select('plaza_id', $plazas, null, ['class' => 'form-control','placeholder' => 'Todas...'])!!}
		</div>
		&nbsp &nbsp

		<div class="form-group">
			{!! Form::label('tipo', 'Tipo:') !!}
            {!! Form::select('tipo', [''=>'Todos...','Pagadora'=>'Pagadora','Facturadora'=>'Facturadora','Intermedia'=>'Intermedia'], null, ['class' => 'form-control'])!!}
            
		</div>

		&nbsp
		
		<button type="submit" class="btn btn-info" style="background-color: #039BE5">Buscar</button>
	{!! Form::close() !!}
		
</div>