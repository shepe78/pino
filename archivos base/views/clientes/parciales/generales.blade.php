<div class="row">
	<div class="col-lg-4">
		<div style="margin-top: 15px" class="card lg-5">
	  		<h3 class="card-header">Datos generales del cliente</h3>
	  		<div class="card-body">
	  			
	    		@include('clientes.parciales.profile')
	    	</div>
	    	<div class="card-footer text-muted">
	    		<b>Status:</b>
		 		@if($cliente->status=='Inactivo')
	    			<p class="badge badge-danger">>Inactivo</p>
	   			@else
	    			<p class="badge badge-success">Activo</p>	
	    		@endif				
	    		
	  		</div>				  
		</div>  {{-- generales --}}
	</div>
	
	<div class="col-lg-3">
		<div style="margin-top: 15px"	class="card lg-4">			
			<h3 class="card-header">Contactos del cliente</h3>
  
  			<div class="card-body">
  				@include('clientes.parciales.contactos')
    		</div>						
		</div>
	</div>		
		
	<div class="col-lg-2">
		<div style="margin-top: 15px" class="card lg-2">
		  <h3 class="card-header">Expediente</h3>
		 
	  
	  	<div class="card-body">
			@include('clientes.parciales.expediente')
	  	</div>
	  </div>
	</div>

	<div class="col-lg-3">
		<div style="margin-top: 15px" class="card lg-4">
		  <h3 class="card-header">Equipo de Atención</h3>
		  <div class="card-body">
			@include('clientes.parciales.equipo_atencion')
	  	  </div>
		</div>  	
	</div>

</div>
