@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card border-primary">
		<div class="card-header text-white bg-primary"><h3 class="card-title">Edición del Esquema</h3></div>
		<div class="card-body text-dark">
			{!!Form::open(['route'=> ['esquemas.update',$esquema] ,'method'=>'PUT','enctype'=>'multipart/form-data'])!!}
            {{Form::token()}}


            	<style>
            .letras {
                      color: #835223;
                     
                      font-weight: bold;
                      
                      
                  } 
            </style>

            <div class="row">
                     {{-- Cliente Field --}}
                     <div class="form-group col-sm-7">
                       {!! Form::label('cliente_id', 'Cliente:',['class'=>'letras']) !!}
                       {!! Form::select('cliente_id', $clientes, $esquema->cliente_id, ['class' => 'form-control selectpicker','data-live-search' => 'true'])!!}
                     </div>
              </div>

              <div class="row">
                    
                    <!-- Empresa Field -->
                     <div class="form-group col-sm-6">
                       {!! Form::label('facturadora_id', 'Emisora:',['class'=>'letras']) !!}
                       {!! Form::select('facturadora_id', $empresas, $esquema->facturadora_id, ['class' => 'form-control'])!!}
                     </div>


                    <!-- Empresa Field -->
                     <div class="form-group col-sm-6">
                       {!! Form::label('pagadora_id', 'Remuneradora:',['class'=>'letras']) !!}
                       {!! Form::select('pagadora_id', $empresas, $esquema->pagadora_id, ['class' => 'form-control'])!!}
                     </div>

              </div>

              <div class="row">
                     <!-- tipo Field -->
                     <div class="form-group col-sm-3">
                     {!! Form::label('producto', 'Producto:',['class'=>'letras']) !!}
                     {!! Form::select('producto',['IAS'=>'IAS','Nomina'=>'Nomina','Mixto'=>'Mixto','Flujo'=>'Flujo','OCRD'=>'OCRD','SPS'=>'SPS','PCC'=>'PCC','SUB'=>'SUB','COM'=>'COM','DEJ'=>'DEJ'],$esquema->producto , ['class' => 'form-control']) !!}
                     </div> 

                     <div class="form-group col-sm-3">
                     {!! Form::label('comision', 'Comisión:',['class'=>'letras']) !!}
                     {!! Form::text('comision', $esquema->comision, ['class' => 'form-control']) !!}
                     </div>

                     <!-- Periodo Field -->
                     <div class="form-group col-sm-3">
                     {!! Form::label('periodicidad', 'Periodicidad:',['class'=>'letras']) !!}
                     {!! Form::select('periodicidad',['Diario'=>'Diario','Semanal'=>'Semanal','Quincenal'=>'Quincenal','Mensual'=>'Mensual','Trimestral'=>'Trimestral','Semestral'=>'Semestral','Anual'=>'Anual','Flujo'=>'Flujo'],$esquema->periodicidad , ['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group col-sm-3">
                     {!! Form::label('fecha_inicio', 'Fecha Inicial:',['class'=>'letras']) !!}
                     {!! Form::date('fecha_inicio', $esquema->fecha_inicio , ['class' => 'form-control']) !!}
                     </div>


              </div>

              <div class="row">

                     <div class="form-group col-sm-12">
                     {!! Form::label('concepto', 'Concepto:',['class'=>'letras']) !!}
                     {!! Form::text('concepto',  $esquema->concepto, ['class' => 'form-control']) !!}
                     </div>

              </div>

              <div class="row">
                <!-- status Field -->
                     <div class="form-group col-sm-3">
                     {!! Form::label('status', 'Status:',['class'=>'letras']) !!}
                     {!! Form::select('status',['Vigente'=>'Vigente','Inactivo'=>'Inactivo','Propuesta'=>'Propuesta'],$esquema->status , ['class' => 'form-control']) !!}
                     </div>


                     <div class="form-group col-sm-3">
                     {!! Form::label('contrato', 'Contrato:',['class'=>'letras']) !!}
                     {!! Form::file('contrato',null , ['class' => 'form-control']) !!}
                     </div>

              </div>
             
                  
                
              <br>   
         
              <!-- Submit Field -->
              <div class="form-group col-sm-12">
              {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
              <a href="{!! route('esquemas.index') !!}" class="btn btn-danger">Cancelar</a>
              </div>

      {!!Form::close()!!}
			
		</div>
	</div>
</div>
@endsection