@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col md-8">
			<div class="card mb-8">
			  <h3 class="card-header">Datos generales del contrato</h3>
			  <div class="card-body">
			  	<div><b>Cliente:</b></div>
			    <h2 class="card-title">{{ $contrato->cliente->razon_social }}</h2>
			    <div><b>Empresa:</b></div>
			    <h3 class="card-subtitle text-muted">{{ $contrato->empresa->razon_social }}</h3>
			    <div><p></p></div>
			    <div><b>Concepto de facturacion:</b></div>
			    <p>{{ $contrato->concepto }}</p>
			    <div><b>Objeto del contrato:</b></div>
			    <p>{{ $contrato->objeto}}</p>
			  </div> 
			</div>			  
		</div>  {{-- col-8 --}}
			
		
		<div class="col md-4">
			<div class="card mb-4">
			  <h3 class="card-header">Historial del contrato</h3>
			  
			  <div class="card-body">
			    <ul>
			    	@if($contrato->f_registro!=null)		    		
			    	<li><p >Fecha de registro:</p><i class="badge badge-info">{{date('d-m-Y',strtotime($contrato->f_registro))}}</i></li>
			    	@else<p></p>
			    	@endif

			    	@if($contrato->f_rechazo!=null)
			    	<li><p >Fecha de rechazo:</p><i class="badge badge-info">{{date('d-m-Y',strtotime($contrato->f_rechazo))}}</i></li>
			    	@else <p></p>
			    	@endif

			    	@if($contrato->f_reenvio!=null)
			    	<li><p >Fecha de reenvio:</p><i class="badge badge-info">{{date('d-m-Y',strtotime($contrato->f_reenvio))}}</i></li>
			    	@else <p></p>
			    	@endif

			    	@if($contrato->f_validado!=null)
			    	<li><p >Fecha de validación:</p><i class="badge badge-info">{{date('d-m-Y',strtotime($contrato->f_validado))}}</i></li>
			    	@else <p></p>
			    	@endif

			    	@if($contrato->f_liberado!=null)
			    	<li><p >Fecha de liberación:</p><i class="badge badge-info">{{date('d-m-Y',strtotime($contrato->f_liberado))}}</i></li>
			    	@else <p></p>
			    	@endif

			    	@if($contrato->f_firma_rl!=null)
			    	<li><p >Fecha de firma RL:</p><i class="badge badge-info">{{date('d-m-Y',strtotime($contrato->f_firma_rl))}}</i></li>
			    	@else <p></p>
			    	@endif

			    	@if($contrato->f_firma_cliente!=null)
			    	<li><p >Fecha de firma del cliente:</p><i class="badge badge-info">{{date('d-m-Y',strtotime($contrato->f_firma_cliente))}}</i></li>
			    	@else <p></p>
			    	@endif


			    </ul>
			  </div>
			  
			</div>
			
		</div>  {{-- col-4 --}}	
	</div>	{{-- row --}}
</div> {{-- container --}}


@endsection
