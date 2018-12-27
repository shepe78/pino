@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card border-primary">
		<div class="card-header text-white bg-primary"><h3 class="card-title">Registro de nuevo seguimiento</h3></div>
		<div class="card-body text-dark">
			{!!Form::open(array('route'=>'seguimientos.store', 'method'=>'POST','autocomplete'=>'off'))!!}
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

                     <!-- status Field -->
                     <div class="form-group col-sm-3">
                     {!! Form::label('tipo_seguimiento', 'Tipo de seguimiento:',['class'=>'letras']) !!}
                     {!! Form::select('tipo_seguimiento',['Email'=>'Email','Llamada'=>'Llamada','Visita'=>'Visita','Incidencia'=>'Incidencia'],null , ['class' => 'form-control']) !!}
                     </div>                  
              </div>
              
              <div class="row">

                     <div class="form-group col-sm-12">
                     {!! Form::label('comentarios', 'Comentarios:',['class'=>'letras']) !!}
                     {!! Form::textarea('comentarios', null, ['class' => 'form-control']) !!}
                     </div>
              </div>

              <br>  
             
              <!-- Submit Field -->
              <div class="form-group col-sm-12">
              {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
              <a href="{!! route('seguimientos.index') !!}" class="btn btn-danger">Cancelar</a>
              </div>  
            

      {!!Form::close()!!}
			
		</div>
	</div>
</div>
@endsection