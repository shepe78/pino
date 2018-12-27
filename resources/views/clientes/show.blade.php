@extends('layouts.principal')

@section('content')
  
	<div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills">
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

                  
                </div>	
            </div>
        </div>        		
	</div> {{-- container --}}
@endsection