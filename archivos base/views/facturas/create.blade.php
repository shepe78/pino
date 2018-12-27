@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card border-primary">
		<div class="card-header text-white bg-primary"><h3 class="card-title">Registro de nueva factura</h3></div>
		<div class="card-body text-dark">
			{!!Form::open(array('route'=>'facturas.store', 'method'=>'POST','autocomplete'=>'off'))!!}
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
                       {!! Form::select('cliente_id', $clientes, null, ['class' => 'form-control selectpicker','data-live-search' => 'true'])!!}
                     </div>
              
                    <!-- Empresa Field -->
                     <div class="form-group col-sm-7">
                       {!! Form::label('empresa_id', 'Empresa:',['class'=>'letras']) !!}
                       {!! Form::select('empresa_id', $empresas, null, ['class' => 'form-control'])!!}
                     </div>
              </div>

              <div class="row">

                     <div class="form-group col-sm-3">
                     {!! Form::label('fecha', 'Fecha:',['class'=>'letras']) !!}
                     {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group col-sm-3">
                     {!! Form::label('folio', 'Folio:',['class'=>'letras']) !!}
                     {!! Form::text('folio', null, ['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group col-sm-3">
                     {!! Form::label('serie', 'Serie:',['class'=>'letras']) !!}
                     {!! Form::text('serie', null, ['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group col-sm-3">
                     {!! Form::label('clave_sat', 'Clave SAT:',['class'=>'letras']) !!}
                     {!! Form::text('clave_sat', null, ['class' => 'form-control']) !!}
                     </div>
                    

              </div>

              <div class="row">

                     <div class="form-group col-sm-12">
                     {!! Form::label('concepto', 'Concepto:',['class'=>'letras']) !!}
                     {!! Form::text('concepto', null, ['class' => 'form-control']) !!}
                     </div>



              </div>

              <div class="row">

                     <div class="form-group col-sm-3">
                     {!! Form::label('moneda', 'Moneda:',['class'=>'letras']) !!}
                     {!! Form::select('moneda',['Pesos(MXP)'=>'Pesos(MXP)','Dolares(USD)'=>'Dolares(USD)'],null , ['class' => 'form-control']) !!}
                     </div>

                     <!-- importe_pesos Field -->
                     <div class="form-group col-sm-4">
                     {!! Form::label('importe', 'Importe:',['class'=>'letras']) !!}
                     {!! Form::text('importe', null, ['class' => 'form-control']) !!}
                     </div>

                     {{-- <div class="form-group col-sm-4">
                     {!! Form::label('importe', 'Importe:',['class'=>'letras']) !!}
                     {!! Form::selectMonth('importe', null, ['class' => 'form-control']) !!}
                     </div> --}}

                      
              </div>

              <div class="row">
                     <div class="form-group col-sm-3">
                     {!! Form::label('status', 'Status:',['class'=>'letras']) !!}
                     {!! Form::select('status',['Vigente'=>'Vigente','Cancelada'=>'Cancelada'],null , ['class' => 'form-control']) !!}
                     </div>

              </div>        
                  
                
              <br>  
             
              <!-- Submit Field -->
              <div class="form-group col-sm-12">
              {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
              <a href="{!! route('facturas.index') !!}" class="btn btn-default">Cancelar</a>
              </div>  
            

      {!!Form::close()!!}
			
		</div>
	</div>
</div>
@endsection
