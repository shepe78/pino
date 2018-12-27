@extends('layouts.app')

@section('content')
  
	<div class="container-fluid">
        <div class="card border-primary mb-12">
            <div class="card-body text-dark">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#Generales">Generales</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Esquemas">Esquemas</a>
                  </li>                  
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Seguimientos">Seguimientos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Informes">Informes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Acumulados">Acumulados</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Empleados">Empleados</a>
                  </li>                                  
                </ul>

                <div id="myTabContent" class="tab-content">
                  
	                <div class="tab-pane fade show active" id="Generales">
						        @include('clientes.parciales.generales')							                               
	                </div>	                  
	                <div class="tab-pane fade" id="Esquemas">
                  <br>
                    @include('clientes.parciales.esquemas')               						       
					        </div>                 
	              	<div class="tab-pane fade" id="Seguimientos">
                  <br> 
	              		@include('clientes.parciales.seguimientos')	 
                  </div>
                  <div class="tab-pane fade" id="Informes">
                  <br>
	              		@include('clientes.parciales.informes')
                	</div>

                  <div class="tab-pane fade" id="Acumulados">
                    @include('clientes.parciales.acumulados')  
                  </div>

                  <div class="tab-pane fade" id="Empleados">
                    <br>
                    @include('clientes.parciales.empleados')  
                  </div>

                </div>	
            </div>
        </div>        		
	</div> {{-- container --}}
@endsection