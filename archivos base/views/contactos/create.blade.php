@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card border-primary">
		<div class="card-header text-white bg-primary"><h3 class="card-title">Registro de nuevo contacto</h3></div>
		<div class="card-body text-dark">
			{!!Form::open(array('route'=>'contactos.store', 'method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}

            <style>
            .letras {
                      color: #835223;
                      /*font-family: 'verdana';
                      font-weight: bold;
                      font-size: 15px;*/
                      
                  } 
            </style>

            <div class="row">

              <div class="form-group col-sm-6">
              {!! Form::label('nombre', 'Nombre:',['class'=>'letras']) !!}
              {!! Form::text('nombre', null, ['class' => 'form-control', 'required']) !!}
              </div>                   

            </div>                

              <div class="row">

                     <div class="form-group col-sm-4">
                     {!! Form::label('email', 'Email:',['class'=>'letras']) !!}
                     {!! Form::text('email', null, ['class' => 'form-control']) !!}
                     </div>

                     <!-- Puesto Field -->
                     <div class="form-group col-sm-4">
                     {!! Form::label('puesto', 'Puesto:',['class'=>'letras']) !!}
                     {!! Form::text('puesto', null, ['class' => 'form-control']) !!}
                     </div>       

              </div>

              <div class="row">
                    <!-- Telefono Field -->
                     <div class="form-group col-sm-4">
                     {!! Form::label('telefono', 'Telefono:',['class'=>'letras']) !!}
                     {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
                     </div>


                     <!-- Status Field -->
                     <div class="form-group col-sm-4">
                     {!! Form::label('status', 'Status:',['class'=>'letras']) !!}
                     {!! Form::select('status', 
                     ['Activo'=>'Activo',
                     'Inactivo'=>'Inactivo'],null , 
                     ['class' => 'form-control']) 
                     !!}
                     </div> 

              </div>
                  
              <div class="row">
                     
                      <!-- Plaza Field -->
                     <div class="form-group col-sm-7">
                     {!! Form::label('cliente_id', 'Cliente:',['class'=>'letras']) !!}
                     {!! Form::select('cliente_id', $clientes, null, ['class' => 'selectpicker form-control','data-live-search' => 'true']) 
                     !!}
                     </div>
              </div>

                
              <br>  
             
              <!-- Submit Field -->
              <div class="form-group col-sm-12">
              {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
              <a href="{!! route('contactos.index') !!}" class="btn btn-danger">Cancelar</a>
              </div>  
            

      {!!Form::close()!!}
			
		</div>
	</div>
</div>
@endsection