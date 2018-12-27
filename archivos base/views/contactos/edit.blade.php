@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card border-primary">
		<div class="card-header text-white bg-primary"><h3 class="card-title">Edición del Contactos</h3></div>
		<div class="card-body text-dark">
			{!!Form::open(['route'=> ['contactos.update',$contacto], 'method'=>'PUT'])!!}
            {{Form::token()}}

            <div class="row">
              <div class="form-group col-sm-6">
              {!! Form::label('nombre', 'Nombre:') !!}
              {!! Form::text('nombre', $contacto->nombre, ['class' => 'form-control','required']) !!}
              </div>              
            </div>

            <div class="row">
               <!-- Email Field -->
              <div class="form-group col-sm-8">
              {!! Form::label('email', 'email:') !!}
              {!! Form::text('email', $contacto->email, ['class' => 'form-control']) !!}
              </div>

              <!-- Puesto Field -->
              <div class="form-group col-sm-8">
              {!! Form::label('puesto', 'puesto:') !!}
              {!! Form::text('puesto', $contacto->puesto, ['class' => 'form-control']) !!}
              </div>
              
            </div>
             

            <div class="row">              
               <!-- telefono Field -->
              <div class="form-group col-sm-4">
              {!! Form::label('telefono', 'Telefono:') !!}
              {!! Form::text('telefono', $contacto->telefono, ['class' => 'form-control']) !!}
              </div>
             
              <!-- Status Field -->
              <div class="form-group col-sm-4">
              {!! Form::label('status', 'Status:') !!}
              {!! Form::select('status', 
              ['Activo'=>'Activo',
              'Inactivo'=>'Inactivo'],$contacto->status , 
              ['class' => 'form-control']) 
              !!}
              </div>
            </div>

            <div class="row">
              <div class="form-group col-sm-7">
              {!! Form::label('cliente_id', 'Cliente:') !!}
              {!! Form::select('cliente_id', $clientes, $contacto->cliente_id, ['class' => 'form-control selectpicker', 'data-live-search'=>"true"]) 
              !!}
              </div>

                        

              <!-- Submit Field -->
              <div class="form-group col-sm-12">
              {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
              <a href="{!! route('colaboradores.index') !!}" class="btn btn-danger">Cancelar</a>
              </div>

          

      {!!Form::close()!!}
			
		</div>
	</div>
</div>
@endsection