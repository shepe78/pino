@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card border-primary">
		<div class="card-header text-white bg-primary"><h3 class="card-title">Registro de nuevo esquema</h3></div>
		<div class="card-body text-dark">
			{!!Form::open(array('route'=>'expedientes.store', 'enctype'=>'multipart/form-data', 'method'=>'POST','autocomplete'=>'off'))!!}
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
                       {!! Form::select('cliente_id', $clientes, null, ['class' => 'form-control'])!!}
                     </div>
              </div>
                &nbsp
             

                
              <div class="row">
                     <div class="form-group col-sm-4">
                     {!! Form::label('acta_nacimiento', 'Acta de nacimiento:',['class'=>'letras']) !!}
                     {!! Form::file('acta_nacimiento',null , ['class' => 'form-control']) !!}
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
                     {!! Form::label('poder_notaria', 'Poder Notarial:',['class'=>'letras']) !!}
                     {!! Form::file('poder_notaria',null , ['class' => 'form-control']) !!}
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