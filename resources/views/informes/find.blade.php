<p></p>
	<div class="col-12">
	{!! Form::model(Request::only(['cliente_id','periodo','ejercicio']), ['route'=>'informes.index', 'method'=>'GET','class'=>"form-inline"]) !!} 
		
		<div class="form-group">
			{!! Form::label('cliente_id', 'Nombre del cliente::') !!}
			&nbsp
            {!! Form::select('cliente_id', $clientes, null, ['class' => 'form-control', 'placeholder'=>'Seleccione...'])!!}
		</div>
		
		&nbsp &nbsp &nbsp	
		<div class="form-group">
			{!! Form::label('ejercicio', 'Ejercicio:') !!}
			&nbsp
            {!! Form::select('ejercicio', [''=>'Todos','2012'=>'2012','2013'=>'2013','2014'=>'2014','2015'=>'2015','2016'=>'2016','2017'=>'2017','2018'=>'2018','2019'=>'2019'], null, ['class' => 'form-control'])!!}
		</div>
		&nbsp &nbsp

		<div class="form-group">
			{!! Form::label('periodo', 'Periodo:') !!}
			&nbsp
            {!! Form::select('periodo', [''=>'Todos...','Enero'=>'Enero','Febrero'=>'Febrero','Marzo'=>'Marzo','Abril'=>'Abril','Mayo'=>'Mayo','Junio'=>'Junio','Julio'=>'Julio','Agosto'=>'Agosto','Septiembre'=>'Septiembre','Octubre'=>'Octubre','Noviembre'=>'Noviembre','Diciembre'=>'Diciembre'], null, ['class' => 'form-control'])!!}
		</div>

		&nbsp
		
		<button type="submit" class="btn btn-info" style="background-color: #039BE5">Buscar</button>
	{!! Form::close() !!}
		
</div>