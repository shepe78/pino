@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card border-primary">
		<div class="card-header text-white bg-primary"><h3 class="card-title">Edición del Expediente</h3></div>
		<div class="card-body text-dark">
			{!!Form::open(['route'=> ['expedientes.update',$expediente] ,'method'=>'PUT','enctype'=>'multipart/form-data'])!!}
            {{Form::token()}}


            	<style>
            .letras {
                      color: #835223;                     
                      font-weight: bold;                     
                    } 
            </style>

            <div class="row">
                     {{-- <h2>{{$expediente->cliente->razon_social}}</h2> --}}
              </div>
                &nbsp
             

                
              <div class="row">
                     <div class="form-group col-sm-4">
                     {!! Form::label('acta_nacimiento', 'Acta de nacimiento:',['class'=>'letras']) !!}
                     {!! Form::file( 'acta_nacimiento',null, ['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group col-sm-4">
                     {!! Form::label('curp', 'Curp:',['class'=>'letras']) !!}
                     {!! Form::file('curp',null , ['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group col-sm-4">
                     {!! Form::label('documento_migratorio', 'Documento migratorio:',['class'=>'letras']) !!}
                     {!! Form::file('documento_migratorio',null , ['class' => 'form-control']) !!}
                     </div>
              </div>
             
                <hr>
              
              <div class="row">  

                    <div class="form-group col-sm-4">
                     {!! Form::label('identificacion', 'Identificacion:',['class'=>'letras']) !!}
                     {!! Form::file('identificacion',null , ['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group col-sm-4">
                     {!! Form::label('acta_constitutiva', 'Acta constitutiva:',['class'=>'letras']) !!}
                     {!! Form::file('acta_constitutiva',null , ['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group col-sm-4">
                     {!! Form::label('poder_notarial', 'Poder Notarial:',['class'=>'letras']) !!}
                     {!! Form::file('poder_notarial',null , ['class' => 'form-control']) !!}
                     </div>
              </div>
             

              &nbsp
              
              <div class="row">       

                     <div class="form-group col-sm-4">
                     {!! Form::label('cuestionario', 'Cuestionario:',['class'=>'letras']) !!}
                     {!! Form::file('cuestionario',null , ['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group col-sm-4">
                     {!! Form::label('comprobante_domicilio', 'Comprobante de domicilio:',['class'=>'letras']) !!}
                     {!! Form::file('comprobante_domicilio',null , ['class' => 'form-control']) !!}
                     </div>

                     <div class="form-group col-sm-4">
                     {!! Form::label('cedula_rfc', 'Cedula RFC:',['class'=>'letras']) !!}
                     {!! Form::file('cedula_rfc',null , ['class' => 'form-control']) !!}
                     </div>
              </div>
                
              <br>  
             
              <!-- Submit Field -->
              <div class="form-group col-sm-12">
              {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
              <a href="{!! route('expedientes.index') !!}" class="btn btn-danger">Cancelar</a>
              </div> 
         
             

      {!!Form::close()!!}
			
		</div>
	</div>
</div>
@endsection