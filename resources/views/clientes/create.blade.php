@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card border-primary">
		<div class="card-header text-white bg-primary"><h3 class="card-title">Registro de nuevo cliente</h3></div>
		<div class="card-body text-dark">
			{!!Form::open(array('route'=>'clientes.store', 'method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}

            <style>
            .letras {
                      color: #835223;
                      font-family: 'verdana';
                      font-weight: bold;
                      font-size: 15px;
                      
                  } 
            </style>

            
            <div class="row">
                  <!-- Razon Social Field -->
                  <div class="form-group col-sm-6">
                  {!! Form::label('razon_social', 'Razon Social:', ['class' => 'letras']) !!}
                  {!! Form::text('razon_social', null, ['class' => 'form-control', 'required']) !!}
                  </div>

                   <!-- Rfc Field -->
                  <div class="form-group col-sm-3">
                  {!! Form::label('rfc', 'Rfc:', ['class' => 'letras']) !!}
                  {!! Form::text('rfc', null, ['class' => 'form-control', 'required']) !!}
                  </div>

                  <!-- tipo Field -->
                  <div class="form-group col-sm-2">
                  {!! Form::label('tipo_cliente', 'Tipo de cliente:', ['class' => 'letras']) !!}
                  {!! Form::select('tipo_cliente', ['Directo' => 'Directo', 'Indirecto' => 'Indirecto','Prospecto' => 'Prospecto'], null, ['class' => 'form-control']) !!}
                  </div>
                  
            </div>
            
            <div class="row">
                   <!-- Nombre Comercial Field -->
            <div class="form-group col-sm-6">
            {!! Form::label('nombre_comercial', 'Nombre Comercial:', ['class' => 'letras']) !!}
            {!! Form::text('nombre_comercial', null, ['class' => 'form-control', 'required']) !!}
            </div>

            <!-- Grupo Id Field -->
                  <div class="form-group col-sm-3">
                  {!! Form::label('grupo_id', 'Grupo:', ['class' => 'letras']) !!}
                  {!! Form::select('grupo_id', $grupos,  null, ['class' => 'form-control']) !!}
                  </div>

                  <!-- Grupo Id Field -->
                  <div class="form-group col-sm-2">
                  {!! Form::label('persona', 'Grupo:', ['class' => 'letras']) !!}
                  {!! Form::select('persona',  ['Fisica' => 'Fisica','Moral'=>'Moral'], null,['class' => 'form-control']) !!}
                  </div>


            </div>
           

            
            <div class="row">
                  <!-- Domicilio Field -->
                  <div class="form-group col-sm-8">
                  {!! Form::label('domicilio', 'Domicilio:', ['class' => 'letras']) !!}
                  {!! Form::text('domicilio', null, ['class' => 'form-control', 'required']) !!}
                  </div>

                   <!-- Ciudad Id Field -->
                  <div class="form-group col-sm-3">
                  {!! Form::label('ciudad_id', 'Ciudad:', ['class' => 'letras']) !!}
                  {!! Form::select('ciudad_id', $ciudades, null, ['class' => 'form-control']) !!}
                  </div>

            </div>      
            

           
            <div class="row">

                  <!-- Giro Id Field -->
                  <div class="form-group col-sm-7">
                  {!! Form::label('giro_id', 'Giro Comercial:', ['class' => 'letras']) !!}
                  {!! Form::select('giro_id', $giros, null, ['class' => 'form-control']) !!}
                  </div>

                  <!-- Plaza Id Field -->
                  <div class="form-group col-sm-3">
                  {!! Form::label('plaza_id', 'Plaza:', ['class' => 'letras']) !!}
                  {!! Form::select('plaza_id', $plazas, null, ['class' => 'form-control']) !!}
                  </div>                  

            </div>


            <div class="row">

                   <!-- Analista Id Field -->
                  <div class="form-group col-sm-4">
                  {!! Form::label('analista_id', 'Analista:', ['class' => 'letras']) !!}
                  {!! Form::select('analista_id', $colaboradores, null,['class' => 'form-control']) !!}
                  </div>

                  <!-- Asesor Id Field -->
                  <div class="form-group col-sm-4">
                  {!! Form::label('asesor_id', 'Asesor:', ['class' => 'letras'])!!}
                  {!! Form::select('asesor_id', $colaboradores, null, ['class' => 'form-control']) !!}
                  </div>

                  <!-- Promotor Id Field -->
                  <div class="form-group col-sm-4">
                  {!! Form::label('promotor_id', 'Promotor:', ['class' => 'letras']) !!}
                  {!! Form::select('promotor_id', $colaboradores, null, ['class' => 'form-control']) !!}
                  </div>  
            </div>

            <div class="row">
                   <!-- Status Field -->
                  <div class="form-group col-sm-3">
                  {!! Form::label('status', 'Status:', ['class' => 'letras']) !!}
                  {!! Form::select('status', ['Activo' => 'Activo', 'Inactivo' => 'Inactivo'], null, ['class' => 'form-control']) !!}
                  </div>
            </div>
            <br> 

             <!-- Submit Field -->
            <div class="form-group col-sm-12">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
            <a href="{!! route('clientes.index') !!}" class="btn btn-danger">Cancelar</a>
            </div> 
            

      {!!Form::close()!!}
			
		</div>
	</div>
</div>
@endsection