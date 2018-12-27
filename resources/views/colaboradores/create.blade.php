@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card border-primary">
		<div class="card-header"><h3 style="color: blue" class="card-title">Registro de nuevo colaborador</h3></div>
		<div class="card-body text-dark">
			{!!Form::open(array('route'=>'colaboradores.store', 'method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}

              <div class="form-group col-sm-6">
              {!! Form::label('nombre', 'Nombre:') !!}
              {!! Form::text('nombre', null, ['class' => 'form-control', 'required']) !!}
              </div>


             {{--  <div class="form-group col-sm-6">
              {!! Form::label('domicilio', 'Domicilio:') !!}
              {!! Form::text('domicilio', null, ['class' => 'form-control', 'required']) !!}
              </div> --}}

              <!-- Domicilio Field -->
              <div class="form-group col-sm-8">
              {!! Form::label('email', 'Email:') !!}
              {!! Form::text('email', null, ['class' => 'form-control', 'required']) !!}
              </div>

              <!-- Telefono Field -->
              <div class="form-group col-sm-4">
              {!! Form::label('telefono', 'Telefono:') !!}
              {!! Form::text('telefono', null, ['class' => 'form-control', 'required']) !!}
              </div>

               <!-- Celular Field -->
              <div class="form-group col-sm-4">
              {!! Form::label('celular', 'Celular:') !!}
              {!! Form::text('celular', null, ['class' => 'form-control']) !!}
              </div>

              <!-- Tipo Empresa Field -->
              <div class="form-group col-sm-4">
              {!! Form::label('tipo_colaborador', 'Tipo de Colaborador:') !!}
              {!! Form::select('tipo_colaborador', ['Asesor'=>'Asesor','Analista'=>'Analista','Promotor'=>'Promotor'],null, 
              ['class' => 'form-control']) 
              !!}
              </div>

              <!-- Status Field -->
              <div class="form-group col-sm-4">
              {!! Form::label('status', 'Status:') !!}
              {!! Form::select('status', 
              ['Activo'=>'Activo',
              'Inactivo'=>'Inactivo'],null , 
              ['class' => 'form-control']) 
              !!}
              </div>

              <!-- Plaza Field -->
              <div class="form-group col-sm-3">
              {!! Form::label('plaza_id', 'Plaza:') !!}
              {!! Form::select('plaza_id', $plazas, null, ['class' => 'form-control']) 
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