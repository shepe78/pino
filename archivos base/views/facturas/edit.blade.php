@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card border-primary">
		<div class="card-header text-white bg-primary"><h3 class="card-title">Edición del Informes</h3></div>
		<div class="card-body text-dark">
			{!!Form::open(['route'=> ['informes.update',$informe], 'method'=>'PUT'])!!}
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
                       {!! Form::select('cliente_id', $clientes, $informe->cliente_id, ['class' => 'form-control selectpicker','data-live-search' => 'true'])!!}
                     </div>
              
                    <!-- Empresa Field -->
                     <div class="form-group col-sm-7">
                       {!! Form::label('empresa_id', 'Empresa:',['class'=>'letras']) !!}
                       {!! Form::select('empresa_id', $empresas, $informe->empresa_id, ['class' => 'form-control'])!!}
                     </div>
              </div>

              <div class="row">
                     <!-- Ejercicio Field -->
                     <div class="form-group col-sm-4">
                     {!! Form::label('ejercicio', 'Ejercicio:',['class'=>'letras']) !!}
                     {!! Form::select('ejercicio',['2014'=>'2014','2015'=>'2015','2016'=>'2016','2016'=>'2016','2017'=>'2017','2018'=>'2018'],$informe->ejercicio , ['class' => 'form-control']) !!}
                     </div> 

                     <!-- Periodo Field -->
                     <div class="form-group col-sm-4">
                     {!! Form::label('periodo', 'Periodo:',['class'=>'letras']) !!}
                     {!! Form::select('periodo',['Enero'=>'Enero','Febrero'=>'Febrero','Marzo'=>'Marzo','Abril'=>'Abril','Mayo'=>'Mayo','Junio'=>'Junio','Julio'=>'Julio','Agosto'=>'Agosto','Septiembre'=>'Septiembre','Octubre'=>'Octubre','Noviembre'=>'Noviembre','Diciembre'=>'Diciembre'],$informe->periodo , ['class' => 'form-control']) !!}
                     </div>

              </div>

              <div class="row">

                     <div class="form-group col-sm-12">
                     {!! Form::label('concepto', 'Concepto:',['class'=>'letras']) !!}
                     {!! Form::text('concepto', $informe->concepto, ['class' => 'form-control']) !!}
                     </div>

              </div>

              <div class="row">
                     <!-- importe_pesos Field -->
                     <div class="form-group col-sm-4">
                     {!! Form::label('importe_pesos', 'Importe en pesos:',['class'=>'letras']) !!}
                     {!! Form::text('importe_pesos', $informe->importe_pesos, ['class' => 'form-control']) !!}
                     </div>

                      <!-- importe_dolares Field -->
                     <div class="form-group col-sm-4">
                     {!! Form::label('importe_dolares', 'Importe en dolares:',['class'=>'letras']) !!}
                     {!! Form::text('importe_dolares', $informe->importe_dolares, ['class' => 'form-control']) !!}
                     </div>
              </div>

              <div class="row">
                <!-- status Field -->
                     <div class="form-group col-sm-3">
                     {!! Form::label('status', 'Status:',['class'=>'letras']) !!}
                     {!! Form::select('status',['Elaborado'=>'Elaborado','Pendiente'=>'Pendiente'],$informe->status , ['class' => 'form-control']) !!}
                     </div>
              </div>
                
              <br>  
         
              <!-- Submit Field -->
              <div class="form-group col-sm-12">
              {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
              <a href="{!! route('informes.index') !!}" class="btn btn-default">Cancelar</a>
              </div>

      {!!Form::close()!!}
			
		</div>
	</div>
</div>
@endsection