@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card border-primary">
		<div class="card-header">Edición de solicitud</div>
		<div class="card-body text-dark">
      @if(auth()->user()->tipo=='comercial')
			  {!!Form::model($contrato,['method'=>'PATCH','route'=>['contratos.update',$contrato->id]])!!}
                    {{Form::token()}}

                    <div class="form-group col-md-8">
                      {!! Form::label('cliente_id', 'Cliente')!!}
                      {!! Form::select('cliente_id', $clientes, $contrato->cliente->id, ['class'=> 'form-control select-cliente','required']) !!}
                    </div>
         
                    
                    <div class="form-group col-md-8">
                      {!! Form::label('facturadora_id', 'Empresa')!!}
                      {!! Form::select('facturadora_id', $empresas, $contrato->empresa->id, ['class'=> 'form-control select-empresa','required']) !!}
                    </div>



                    <div class="form-group col-md-8">
                      <label for="concepto">Concepto de facturación:</label>
                      <input type="text" name="concepto" class="form-control" value="{{$contrato->concepto}}">
                       
                    </div>

                    @if(auth()->user()->tipo=='juridico')
                    <div class="form-group col-md-8">
                      <label for="motivo_rechazo">Motivo de rechazo:</label>
                      <input type="text" name="motivo_rechazo" class="form-control" value="{{$contrato->motivo_rechazo}}">
                       
                    </div>
                    @else
                    <div>
                      <div class="form-group col-md-8">
                      <label for="motivo_rechazo">Motivo de rechazo:</label>
                      <input type="text" readonly="true" name="motivo_rechazo" class="form-control" value="{{$contrato->motivo_rechazo}}">
                    </div>
                    @endif

                    @if(auth()->user()->tipo=='planeacion')
                    <div class="form-group col-md-8">
                      <label for="objeto">Objeto del contrato:</label>
                      <input type="text" name="objeto" class="form-control" value="{{$contrato->objeto}}">
                       
                    </div>
                    @else
                    <div>
                      <div class="form-group col-md-8">
                      <label for="objeto">Objeto del contrato:</label>
                      <input type="text" readonly="true" name="objeto" class="form-control" value="{{$contrato->objeto}}">
                    </div>
                    @endif


                    <div class="form-group col-md-12 pull-right">
                      <button class="btn btn-primary" type="submit">actualizar</button>
                      <a href="{{ URL::previous() }}" class="btn btn-danger">Cancelar</a>
                    </div>

        {!!Form::close()!!} 
      @endif  

      @if(auth()->user()->tipo=='planeacion')
        {!!Form::model($contrato,['method'=>'PATCH','route'=>['contratos.liberar',$contrato->id]])!!}
        {{Form::token()}}

          <h2>Asignacion del objeto contractual</h2>
          <div class="form-group col-md-8">
          <label for="objeto">Objeto del contrato:</label>
          <input type="text" name="objeto" class="form-control" value="{{$contrato->objeto}}">
          </div>
  
          <div class="form-group col-md-12 pull-right">
          <button class="btn btn-primary" type="submit">Liberar</button>
          <a href="{{ URL::previous() }}" class="btn btn-danger">Cancelar</a>
          </div>

        {!!Form::close()!!} 
      @endif

      @if(auth()->user()->tipo=='juridico')
        {!!Form::model($contrato,['method'=>'PATCH','route'=>['contratos.rechazar',$contrato->id]])!!}
        {{Form::token()}}

          <h4>Rechazo de solicitud de contrato</h4>
            <div class="form-group col-md-8">
            <label for="motivo_rechazo">Motivo:</label>
            <input type="text" name="motivo_rechazo" class="form-control" value="{{$contrato->motivo_rechazo}}">
            </div>
            <div class="form-group col-md-12 pull-right">
            <button class="btn btn-primary" type="submit">Rechazar</button>
            <a href="{{ URL::previous() }}" class="btn btn-danger">Cancelar</a>
            </div>
       {!!Form::close()!!} 
      @endif
			
		</div>
	</div>
</div>
@endsection