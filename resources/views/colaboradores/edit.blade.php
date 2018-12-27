@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card border-primary">
		<div class="card-header"><h3 style="color: blue" class="card-title">Edición del colaborador</h3></div>
		<div class="card-body text-dark">
			{!!Form::open(['route'=> ['colaboradores.update',$colaborador], 'method'=>'PUT'])!!}
            {{Form::token()}}

            <div class="form-group col-sm-6">
              {!! Form::label('nombre', 'Nombre:') !!}
              {!! Form::text('nombre', $colaborador->nombre, ['class' => 'form-control','required']) !!}
              </div>
              
              <div class="form-group col-sm-8">
              {!! Form::label('email', 'email:') !!}
              {!! Form::text('email', $colaborador->email, ['class' => 'form-control', 'required']) !!}
              </div>

              <!-- telefono Field -->
              <div class="form-group col-sm-4">
              {!! Form::label('telefono', 'Telefono:') !!}
              {!! Form::text('telefono', $colaborador->telefono, ['class' => 'form-control', 'required']) !!}
              </div>


              <!-- celular Field -->
              <div class="form-group col-sm-4">
              {!! Form::label('celular', 'Celular:') !!}
              {!! Form::text('celular', $colaborador->celular, ['class' => 'form-control']) !!}
              </div>

              <!-- Tipo Empresa Field -->
              <div class="form-group col-sm-4">
              {!! Form::label('tipo_colaborador', 'Tipo Colaborador:') !!}
              {!! Form::select('tipo_colaborador', ['Promotor'=>'Promotor','Asesor'=>'Asesor','Analista'=>'Analista'],$colaborador->tipo_colaborador, 
              ['class' => 'form-control']) 
              !!}
              </div>

              <!-- Status Field -->
              <div class="form-group col-sm-4">
              {!! Form::label('status', 'Status:') !!}
              {!! Form::select('status', 
              ['Activo'=>'Activo',
              'Inactivo'=>'Inactivo'],$colaborador->status, 
              ['class' => 'form-control']) 
              !!}
              </div>

              <!-- Plaza Field -->
              <div class="form-group col-sm-3">
              {!! Form::label('plaza_id', 'Plaza:') !!}
              {!! Form::select('plaza_id', $plazas, $colaborador->plaza_id, ['class' => 'form-control']) 
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