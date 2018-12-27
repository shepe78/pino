@extends('layouts.app')
@section('content')

<div class="container">
	<br>
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h2 class="box-title">Registrar nueva solicitud de contrato:</h2>
                  <div class="box-tools pull-right">
                    
                    
                    {{-- <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> --}}
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<div class="row">
	                  	<div class="col-md-12">
		                          
							@if (count($errors)>0)
							<div class="alert alert-danger">
								<ul>
								@foreach ($errors->all() as $error)
									<li>{{$error}}</li>
								@endforeach
								</ul>
							</div>
							@endif

							{!!Form::open(array('route'=>'contratos.store','enctype'=>'multipart/form-data',  'method'=>'POST','autocomplete'=>'off'))!!}
				            {{Form::token()}}

				             <div class="form-group col-sm-7">
		                       {!! Form::label('cliente_id', 'Cliente:',['class'=>'letras']) !!}
		                       {!! Form::select('cliente_id', $clientes, null, ['class' => 'form-control selectpicker', 'data-live-search' => 'true'])!!}
		                     </div>
		              
		                    <!-- Empresa Field -->
		                     <div class="form-group col-sm-7">
		                       {!! Form::label('facturadora_id', 'Empresa:',['class'=>'letras']) !!}
		                       {!! Form::select('facturadora_id', $empresas, null, ['class' => 'form-control'])!!}
		                     </div>
				            


				            <div class="form-group col-md-12 pull-right">
				              <button class="btn btn-primary" type="submit">Solicitar</button>
				              <a href="{{ URL::previous() }}" class="btn btn-danger">Cancelar</a>
				            </div>

				      {!!Form::close()!!}	
									
									
								</div>
							</div>
                       </div>		                    
                  	</div>
                </div><!-- /.row -->
            </div><!-- /.box-body -->
        </div><!-- /.box -->
	</div><!-- /.col -->
</div><!-- /.row -->
@endsection