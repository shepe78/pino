@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card border-primary">
		<div class="card-header"><h3 style="color: blue" class="card-title">Edición de la empresa</h3></div>
		<div class="card-body text-dark">
			{!!Form::open(['route'=> ['empresas.update',$empresa], 'method'=>'PUT'])!!}
            {{Form::token()}}

            <div class="form-group col-sm-6">
              {!! Form::label('razon_social', 'Razon Social:') !!}
              {!! Form::text('razon_social', $empresa->razon_social, ['class' => 'form-control','required']) !!}
              </div>

              <!-- Domicilio Field -->
              <div class="form-group col-sm-8">
              {!! Form::label('domicilio', 'Domicilio:') !!}
              {!! Form::text('domicilio', $empresa->domicilio, ['class' => 'form-control']) !!}
              </div>

              <!-- Rfc Field -->
              <div class="form-group col-sm-4">
              {!! Form::label('rfc', 'Rfc:') !!}
              {!! Form::text('rfc', $empresa->rfc, ['class' => 'form-control']) !!}
              </div>

              <!-- Tipo Empresa Field -->
              <div class="form-group col-sm-4">
              {!! Form::label('tipo_empresa', 'Tipo Empresa:') !!}
              {!! Form::select('tipo_empresa', ['Pagadora'=>'Pagadora','Facturadora'=>'Facturadora','Intermedia'=>'Intermedia'],$empresa->tipo_empresa, 
              ['class' => 'form-control']) 
              !!}
              </div>

              <!-- Status Field -->
              <div class="form-group col-sm-4">
              {!! Form::label('status', 'Status:') !!}
              {!! Form::select('status', 
              ['Activa'=>'Activa',
              'Inactiva'=>'Inactiva'],$empresa->status , 
              ['class' => 'form-control']) 
              !!}
              </div>

              <!-- Plaza Field -->
              <div class="form-group col-sm-3">
              {!! Form::label('plaza_id', 'Plaza:') !!}
              {!! Form::select('plaza_id', $plazas, $empresa->id_plaza, ['class' => 'form-control']) 
              !!}
              </div>

              <!-- Nombre Corto Field -->
              <div class="form-group col-sm-5">
              {!! Form::label('nombre_corto', 'Nombre Corto:') !!}
              {!! Form::text('nombre_corto', $empresa->nombre_corto, ['class' => 'form-control']) !!}
              </div>

              <!-- Submit Field -->
              <div class="form-group col-sm-12">
              {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
              <a href="{!! route('empresas.index') !!}" class="btn btn-danger">Cancelar</a>
              </div>

          

      {!!Form::close()!!}
			
		</div>
	</div>
</div>
@endsection