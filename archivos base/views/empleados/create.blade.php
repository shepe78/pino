@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card border-primary">
		<div class="card-header"><h3 style="color: blue" class="card-title">Registro de nuevo empleado</h3></div>
		<div class="card-body text-dark">
			{!!Form::open(array('route'=>'empleados.store', 'method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
              

              <div class="row">
              <div class="form-group col-sm-6">
              {!! Form::label('nombre', 'Nombre:') !!}
              {!! Form::text('nombre', null, ['class' => 'form-control', 'required']) !!}
              </div>
              </div>
                          


              
              <!-- Plaza Field -->
              <div class="row">
              <div class="form-group col-sm-8">
              {!! Form::label('cliente_id', 'Cliente:') !!}
              {!! Form::select('cliente_id', $clientes, null, ['class' => 'form-control']) 
              !!}
              </div>
              </div>
              <br>


              <div class="row">
                     <div class="form-group col-sm-4">
                     {!! Form::label('acta_nacimiento', 'Acta de nacimiento:',['class'=>'letras']) !!}
                     {!! Form::file('acta_nacimiento',null , ['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group col-sm-4">
                     {!! Form::label('comprobante_domicilio', 'Comprobante:',['class'=>'letras']) !!}
                     {!! Form::file('comprobante_domicilio',null , ['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group col-sm-4">
                     {!! Form::label('identificacion', 'Identificación:',['class'=>'letras']) !!}
                     {!! Form::file('identificacion',null , ['class' => 'form-control']) !!}
                     </div>
              </div>


              <div class="row">
              <div class="form-group col-sm-4">
              {!! Form::label('status', 'Status:') !!}
              {!! Form::select('status', 
              ['Activo'=>'Activo',
              'Inactivo'=>'Inactivo'],null , 
              ['class' => 'form-control']) 
              !!}
              </div>
              </div>

             
              <!-- Submit Field -->

              <div class="row">
              <div class="form-group col-sm-12">
              {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
              <a href="{!! route('empleados.index') !!}" class="btn btn-danger">Cancelar</a>
              </div>  
            

      {!!Form::close()!!}
			
		</div>
	</div>
</div>
@endsection