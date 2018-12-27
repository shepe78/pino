@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card border-primary">
		<div class="card-header text-white bg-primary"><h3 class="card-title">Registro de nuevo informe</h3></div>
		<div class="card-body text-dark">
			{!!Form::open(array('route'=>'informes.store','enctype'=>'multipart/form-data',  'method'=>'POST','autocomplete'=>'off'))!!}
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
                       {!! Form::select('cliente_id', $clientes, null, ['class' => 'form-control selectpicker', 'data-live-search' => 'true'])!!}
                     </div>
              
                    <!-- Empresa Field -->
                     <div class="form-group col-sm-7">
                       {!! Form::label('empresa_id', 'Empresa:',['class'=>'letras']) !!}
                       {!! Form::select('empresa_id', $empresas, null, ['class' => 'form-control'])!!}
                     </div>
              </div>

              <div class="row">
                     <!-- Ejercicio Field -->
                     <div class="form-group col-sm-4">
                     {!! Form::label('ejercicio', 'Ejercicio:',['class'=>'letras']) !!}
                     {!! Form::select('ejercicio',['2014'=>'2014','2015'=>'2015','2016'=>'2016','2016'=>'2016','2017'=>'2017','2018'=>'2018'],null , ['class' => 'form-control']) !!}
                     </div> 

                     <!-- Periodo Field -->
                     <div class="form-group col-sm-4">
                     {!! Form::label('periodo', 'Periodo:',['class'=>'letras']) !!}
                     {!! Form::select('periodo',['Enero'=>'Enero','Febrero'=>'Febrero','Marzo'=>'Marzo','Abril'=>'Abril','Mayo'=>'Mayo','Junio'=>'Junio','Julio'=>'Julio','Agosto'=>'Agosto','Septiembre'=>'Septiembre','Octubre'=>'Octubre','Noviembre'=>'Noviembre','Diciembre'=>'Diciembre'],null , ['class' => 'form-control']) !!}
                     </div>

              </div>

             {{--  <div class="row">
                    <div class="form-group col-sm-7">
                       {!! Form::label('esquema_', 'Esquema:',['class'=>'letras']) !!}
                       {!! Form::select('esquema_id', $esquemas, null, ['class' => 'form-control'])!!}
                     </div>
              </div> --}}

              <div class="row">
                     <div class="form-group col-sm-12">
                     {!! Form::label('concepto', 'Concepto:',['class'=>'letras']) !!}
                     {!! Form::text('concepto', null, ['class' => 'form-control']) !!}
                     </div>

              </div>

              <div class="row">
                     <!-- importe_pesos Field -->
                     <div class="form-group col-sm-4">
                     {!! Form::label('importe_pesos', 'Importe en pesos:',['class'=>'letras']) !!}
                     {!! Form::text('importe_pesos', null, ['class' => 'form-control']) !!}
                     </div>

                      <!-- importe_dolares Field -->
                     <div class="form-group col-sm-4">
                     {!! Form::label('importe_dolares', 'Importe en dolares:',['class'=>'letras']) !!}
                     {!! Form::text('importe_dolares', null, ['class' => 'form-control']) !!}
                     </div>
              </div>

              <div class="row">
                <!-- status Field -->
                     <div class="form-group col-sm-3">
                     {!! Form::label('status', 'Status:',['class'=>'letras']) !!}
                     {!! Form::select('status',['Elaborado'=>'Elaborado','En Proceso'=>'En Proceso','No Aplica'=>'No Aplica','Concluido'=>'Concluido','Negativa'=>'Negativa'],null , ['class' => 'form-control']) !!}
                     </div>
              </div>

              <div class="row">
                <div class="form-group col-sm-4">
                     {!! Form::label('facturacion', 'Facturación:',['class'=>'letras']) !!}
                     {!! Form::file('facturacion',null , ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-sm-4">
                     {!! Form::label('informepdf', 'PDF Informe:',['class'=>'letras']) !!}
                     {!! Form::file('informepdf',null , ['class' => 'form-control']) !!}
                </div>
              </div>

             
                  
                
              <br>  
             
              <!-- Submit Field -->
              <div class="form-group col-sm-12">
              {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
              <a href="{!! route('informes.index') !!}" class="btn btn-danger">Cancelar</a>
              </div>  
            

      {!!Form::close()!!}
			
		</div>
	</div>
</div>
@endsection