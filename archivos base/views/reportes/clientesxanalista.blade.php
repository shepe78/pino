@extends('layouts.app')

@section('content')

<style>
    /* tab color */
.nav-tabs>li>a {
  background-color: #915476; 
  border-color: #777777;
  color:#fff;
}

/* active tab color */
.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
  color: #1052a3;
  background-color: #1052a3;
  border: 1px solid #888888;
}

/* hover tab color */
.nav-tabs>li>a:hover {
  border-color: #49293b;
  background-color: #49293b;
}
</style>

<div class="container-fluid">
    <div class="card mb-12">
        <div class="card-body text-dark">        	
            <ul class="nav nav-tabs">                  
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Karen">Karen</a>                                        				    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Yanet">Yanet</a>                                        				    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Eduardo">Eduardo</a>                                        				    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Yajaira">Yajaira</a>                                        				    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Sayuri">Sayuri</a>                                        				    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Zurisadai">Zurisadai</a>                                        				    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Angel">Angel</a>                                        				    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Erika">Erika</a>                                        				    
                  </li>                 			   
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Anahi">Anahi</a>                                        				    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Alejandra">Alejandra</a>                                        				    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Diana">Diana</a>                                        				    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Andrea">Andrea</a>                                        				    
                  </li>
            </ul>
            <div id="myTabContent" class="tab-content">
              	<style>
			            .letras {
			                      color: #835223;
			                      font-family: 'verdana';
			                      font-weight: bold;
			                      font-size: 15px;			                      
			                  } 
		        </style>                  
                <div class="tab-pane fade" id="Karen">												
						<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center text-info">Id</th>
									<th class="text-center text-info">Razon Social</th>
									<th class="text-center text-info">Nombre Comercial</th>
									<th class="text-center text-info">Tipo de cliente</th>
									<th class="text-center text-info">Persona</th>
									<th class="text-center text-info">Status</th>
									<th class="text-center text-info">Plaza</th>
									<th class="text-center text-info">Promotor</th>
									<th class="text-center text-info">Analista</th>
									<th class="text-center text-info">Acciones</th>	
								</thead>
								<span class="text-info">Total de registros: {{ $registros1 }}</span>
								
								<tbody>
									@foreach($karen as $item)
									<tr>
										<td>{{ $item->id }}</td>
										<td>{{ $item->razon_social }}</td>							
										<td>{{ $item->nombre_comercial }}</td>

										<td class="text-center">
										@if ($item->tipo_cliente=='Directo')	
											<span class="fa fa-check-circle text-success"> {{ $item->tipo_cliente }}</span></td>								
										@elseif($item->tipo_cliente=='Indirecto')
											<span class="fa fa-refresh text-warning"> {{ $item->tipo_cliente }}</span></td>							
										@elseif($item->tipo_cliente=='Prospecto')
											<span class="fa fa-eye text-info"> {{ $item->tipo_cliente }}</span></td>
										@endif

										<td>{{ $item->persona }}</td>

																
										<td class="text-center">

										@if ($item->status=='Activo')
											<span class="badge badge-success">{{ $item->status }}</td></span>
										@else
											<span class="badge badge-danger">{{ $item->status }}</span>
										@endif
										</td>
										<td>{{ $item->plaza->descripcion }}</td>
										<td>{{ $item->promotor->nombre }}</td>
										<td>{{ $item->analista->nombre }}</td>
										

										<td style="text-align: center">
			                              @include('clientes.acciones')                          
			                          </td>
									</tr>
									@endforeach
								</tbody>
							</table>							
						</div>										                               
                </div>               
                <div class="tab-pane fade" id="Yanet">
						<div class="card-body text-dark">				
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center text-info">Id</th>
									<th class="text-center text-info">Razon Social</th>
									<th class="text-center text-info">Nombre Comercial</th>
									<th class="text-center text-info">Tipo de cliente</th>
									<th class="text-center text-info">Persona</th>
									<th class="text-center text-info">Status</th>
									<th class="text-center text-info">Plaza</th>
									<th class="text-center text-info">Promotor</th>
									<th class="text-center text-info">Analista</th>
									<th class="text-center text-info">Acciones</th>	
								</thead>
								<span class="text-info">Total de registros: {{ $registros7 }}</span>
								
								<tbody>
									@foreach($yanet as $item)
									<tr>
										<td>{{ $item->id }}</td>
										<td>{{ $item->razon_social }}</td>							
										<td>{{ $item->nombre_comercial }}</td>

										<td class="text-center">
										@if ($item->tipo_cliente=='Directo')	
											<span class="fa fa-check-circle text-success"> {{ $item->tipo_cliente }}</span></td>								
										@elseif($item->tipo_cliente=='Indirecto')
											<span class="fa fa-refresh text-warning"> {{ $item->tipo_cliente }}</span></td>							
										@elseif($item->tipo_cliente=='Prospecto')
											<span class="fa fa-eye text-info"> {{ $item->tipo_cliente }}</span></td>
										@endif

										<td>{{ $item->persona }}</td>

																
										<td class="text-center">

										@if ($item->status=='Activo')
											<span class="badge badge-success">{{ $item->status }}</td></span>
										@else
											<span class="badge badge-danger">{{ $item->status }}</span>
										@endif
										</td>
										<td>{{ $item->plaza->descripcion }}</td>
										<td>{{ $item->promotor->nombre }}</td>
										<td>{{ $item->analista->nombre }}</td>
										

										<td style="text-align: center">
			                              @include('clientes.acciones')                          
			                          </td>
									</tr>
									@endforeach
								</tbody>
							</table>							
						</div>										                               
                </div>
                <div class="tab-pane fade" id="Eduardo">
						<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center text-info">Id</th>
									<th class="text-center text-info">Razon Social</th>
									<th class="text-center text-info">Nombre Comercial</th>
									<th class="text-center text-info">Tipo de cliente</th>
									<th class="text-center text-info">Persona</th>
									<th class="text-center text-info">Status</th>
									<th class="text-center text-info">Plaza</th>
									<th class="text-center text-info">Promotor</th>
									<th class="text-center text-info">Analista</th>
									<th class="text-center text-info">Acciones</th>	
								</thead>
								<span class="text-info">Total de registros: {{ $registros5 }}</span>								
								<tbody>
									@foreach($eduardo as $item)
									<tr>
										<td>{{ $item->id }}</td>
										<td>{{ $item->razon_social }}</td>							
										<td>{{ $item->nombre_comercial }}</td>
										<td class="text-center">
										@if ($item->tipo_cliente=='Directo')	
											<span class="fa fa-check-circle text-success"> {{ $item->tipo_cliente }}</span></td>								
										@elseif($item->tipo_cliente=='Indirecto')
											<span class="fa fa-refresh text-warning"> {{ $item->tipo_cliente }}</span></td>							
										@elseif($item->tipo_cliente=='Prospecto')
											<span class="fa fa-eye text-info"> {{ $item->tipo_cliente }}</span></td>
										@endif

										<td>{{ $item->persona }}</td>																
										<td class="text-center">
										@if ($item->status=='Activo')
											<span class="badge badge-success">{{ $item->status }}</td></span>
										@else
											<span class="badge badge-danger">{{ $item->status }}</span>
										@endif
										</td>
										<td>{{ $item->plaza->descripcion }}</td>
										<td>{{ $item->promotor->nombre }}</td>
										<td>{{ $item->analista->nombre }}</td>
										<td style="text-align: center">
			                              @include('clientes.acciones')                          
			                          </td>
									</tr>
									@endforeach
								</tbody>
							</table>							
						</div>										                               
                </div>
                <div class="tab-pane fade" id="Yajaira">
						<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center text-info">Id</th>
									<th class="text-center text-info">Razon Social</th>
									<th class="text-center text-info">Nombre Comercial</th>
									<th class="text-center text-info">Tipo de cliente</th>
									<th class="text-center text-info">Persona</th>
									<th class="text-center text-info">Status</th>
									<th class="text-center text-info">Plaza</th>
									<th class="text-center text-info">Promotor</th>
									<th class="text-center text-info">Analista</th>
									<th class="text-center text-info">Acciones</th>	
								</thead>
								<span class="text-info">Total de registros: {{ $registros10 }}</span>
								
								<tbody>
									@foreach($yajaira as $item)
									<tr>
										<td>{{ $item->id }}</td>
										<td>{{ $item->razon_social }}</td>							
										<td>{{ $item->nombre_comercial }}</td>

										<td class="text-center">
										@if ($item->tipo_cliente=='Directo')	
											<span class="fa fa-check-circle text-success"> {{ $item->tipo_cliente }}</span></td>								
										@elseif($item->tipo_cliente=='Indirecto')
											<span class="fa fa-refresh text-warning"> {{ $item->tipo_cliente }}</span></td>							
										@elseif($item->tipo_cliente=='Prospecto')
											<span class="fa fa-eye text-info"> {{ $item->tipo_cliente }}</span></td>
										@endif

										<td>{{ $item->persona }}</td>

																
										<td class="text-center">

										@if ($item->status=='Activo')
											<span class="badge badge-success">{{ $item->status }}</td></span>
										@else
											<span class="badge badge-danger">{{ $item->status }}</span>
										@endif
										</td>
										<td>{{ $item->plaza->descripcion }}</td>
										<td>{{ $item->promotor->nombre }}</td>
										<td>{{ $item->analista->nombre }}</td>
										

										<td style="text-align: center">
			                              @include('clientes.acciones')                          
			                          </td>
									</tr>
									@endforeach
								</tbody>
							</table>							
						</div>										                               
                </div>
                <div class="tab-pane fade" id="Erika">
						<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center text-info">Id</th>
									<th class="text-center text-info">Razon Social</th>
									<th class="text-center text-info">Nombre Comercial</th>
									<th class="text-center text-info">Tipo de cliente</th>
									<th class="text-center text-info">Persona</th>
									<th class="text-center text-info">Status</th>
									<th class="text-center text-info">Plaza</th>
									<th class="text-center text-info">Promotor</th>
									<th class="text-center text-info">Analista</th>
									<th class="text-center text-info">Acciones</th>	
								</thead>
								<span class="text-info">Total de registros: {{ $registros4 }}</span>
								
								<tbody>
									@foreach($erika as $item)
									<tr>
										<td>{{ $item->id }}</td>
										<td>{{ $item->razon_social }}</td>							
										<td>{{ $item->nombre_comercial }}</td>

										<td class="text-center">
										@if ($item->tipo_cliente=='Directo')	
											<span class="fa fa-check-circle text-success"> {{ $item->tipo_cliente }}</span></td>								
										@elseif($item->tipo_cliente=='Indirecto')
											<span class="fa fa-refresh text-warning"> {{ $item->tipo_cliente }}</span></td>							
										@elseif($item->tipo_cliente=='Prospecto')
											<span class="fa fa-eye text-info"> {{ $item->tipo_cliente }}</span></td>
										@endif

										<td>{{ $item->persona }}</td>

																
										<td class="text-center">

										@if ($item->status=='Activo')
											<span class="badge badge-success">{{ $item->status }}</td></span>
										@else
											<span class="badge badge-danger">{{ $item->status }}</span>
										@endif
										</td>
										<td>{{ $item->plaza->descripcion }}</td>
										<td>{{ $item->promotor->nombre }}</td>
										<td>{{ $item->analista->nombre }}</td>
										

										<td style="text-align: center">
			                              @include('clientes.acciones')                          
			                          </td>
									</tr>
									@endforeach
								</tbody>
							</table>							
						</div>										                               
                </div>
                <div class="tab-pane fade" id="Sayuri">
						<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center text-info">Id</th>
									<th class="text-center text-info">Razon Social</th>
									<th class="text-center text-info">Nombre Comercial</th>
									<th class="text-center text-info">Tipo de cliente</th>
									<th class="text-center text-info">Persona</th>
									<th class="text-center text-info">Status</th>
									<th class="text-center text-info">Plaza</th>
									<th class="text-center text-info">Promotor</th>
									<th class="text-center text-info">Analista</th>
									<th class="text-center text-info">Acciones</th>	
								</thead>
								<span class="text-info">Total de registros: {{ $registros9 }}</span>
								
								<tbody>
									@foreach($sayuri as $item)
									<tr>
										<td>{{ $item->id }}</td>
										<td>{{ $item->razon_social }}</td>							
										<td>{{ $item->nombre_comercial }}</td>

										<td class="text-center">
										@if ($item->tipo_cliente=='Directo')	
											<span class="fa fa-check-circle text-success"> {{ $item->tipo_cliente }}</span></td>								
										@elseif($item->tipo_cliente=='Indirecto')
											<span class="fa fa-refresh text-warning"> {{ $item->tipo_cliente }}</span></td>							
										@elseif($item->tipo_cliente=='Prospecto')
											<span class="fa fa-eye text-info"> {{ $item->tipo_cliente }}</span></td>
										@endif

										<td>{{ $item->persona }}</td>

																
										<td class="text-center">

										@if ($item->status=='Activo')
											<span class="badge badge-success">{{ $item->status }}</td></span>
										@else
											<span class="badge badge-danger">{{ $item->status }}</span>
										@endif
										</td>
										<td>{{ $item->plaza->descripcion }}</td>
										<td>{{ $item->promotor->nombre }}</td>
										<td>{{ $item->analista->nombre }}</td>
										

										<td style="text-align: center">
			                              @include('clientes.acciones')                          
			                          </td>
									</tr>
									@endforeach
								</tbody>
							</table>							
						</div>										                               
                </div>
                <div class="tab-pane fade" id="Zurisadai">
						<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center text-info">Id</th>
									<th class="text-center text-info">Razon Social</th>
									<th class="text-center text-info">Nombre Comercial</th>
									<th class="text-center text-info">Tipo de cliente</th>
									<th class="text-center text-info">Persona</th>
									<th class="text-center text-info">Status</th>
									<th class="text-center text-info">Plaza</th>
									<th class="text-center text-info">Promotor</th>
									<th class="text-center text-info">Analista</th>
									<th class="text-center text-info">Acciones</th>	
								</thead>
								<span class="text-info">Total de registros: {{ $registros8 }}</span>
								
								<tbody>
									@foreach($zurisadai as $item)
									<tr>
										<td>{{ $item->id }}</td>
										<td>{{ $item->razon_social }}</td>							
										<td>{{ $item->nombre_comercial }}</td>

										<td class="text-center">
										@if ($item->tipo_cliente=='Directo')	
											<span class="fa fa-check-circle text-success"> {{ $item->tipo_cliente }}</span></td>								
										@elseif($item->tipo_cliente=='Indirecto')
											<span class="fa fa-refresh text-warning"> {{ $item->tipo_cliente }}</span></td>							
										@elseif($item->tipo_cliente=='Prospecto')
											<span class="fa fa-eye text-info"> {{ $item->tipo_cliente }}</span></td>
										@endif

										<td>{{ $item->persona }}</td>

																
										<td class="text-center">

										@if ($item->status=='Activo')
											<span class="badge badge-success">{{ $item->status }}</td></span>
										@else
											<span class="badge badge-danger">{{ $item->status }}</span>
										@endif
										</td>
										<td>{{ $item->plaza->descripcion }}</td>
										<td>{{ $item->promotor->nombre }}</td>
										<td>{{ $item->analista->nombre }}</td>
										

										<td style="text-align: center">
			                              @include('clientes.acciones')                          
			                          </td>
									</tr>
									@endforeach
								</tbody>
							</table>							
						</div>										                               
                </div>
                <div class="tab-pane fade" id="Diana">
						<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center text-info">Id</th>
									<th class="text-center text-info">Razon Social</th>
									<th class="text-center text-info">Nombre Comercial</th>
									<th class="text-center text-info">Tipo de cliente</th>
									<th class="text-center text-info">Persona</th>
									<th class="text-center text-info">Status</th>
									<th class="text-center text-info">Plaza</th>
									<th class="text-center text-info">Promotor</th>
									<th class="text-center text-info">Analista</th>
									<th class="text-center text-info">Acciones</th>	
								</thead>
								<span class="text-info">Total de registros: {{ $registros2 }}</span>
								
								<tbody>
									@foreach($diana as $item)
									<tr>
										<td>{{ $item->id }}</td>
										<td>{{ $item->razon_social }}</td>							
										<td>{{ $item->nombre_comercial }}</td>

										<td class="text-center">
										@if ($item->tipo_cliente=='Directo')	
											<span class="fa fa-check-circle text-success"> {{ $item->tipo_cliente }}</span></td>								
										@elseif($item->tipo_cliente=='Indirecto')
											<span class="fa fa-refresh text-warning"> {{ $item->tipo_cliente }}</span></td>							
										@elseif($item->tipo_cliente=='Prospecto')
											<span class="fa fa-eye text-info"> {{ $item->tipo_cliente }}</span></td>
										@endif

										<td>{{ $item->persona }}</td>

																
										<td class="text-center">

										@if ($item->status=='Activo')
											<span class="badge badge-success">{{ $item->status }}</td></span>
										@else
											<span class="badge badge-danger">{{ $item->status }}</span>
										@endif
										</td>
										<td>{{ $item->plaza->descripcion }}</td>
										<td>{{ $item->promotor->nombre }}</td>
										<td>{{ $item->analista->nombre }}</td>
										

										<td style="text-align: center">
			                              @include('clientes.acciones')                          
			                          </td>
									</tr>
									@endforeach
								</tbody>
							</table>							
						</div>										                               
                </div>
                <div class="tab-pane fade" id="Alejandra">
						<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center text-info">Id</th>
									<th class="text-center text-info">Razon Social</th>
									<th class="text-center text-info">Nombre Comercial</th>
									<th class="text-center text-info">Tipo de cliente</th>
									<th class="text-center text-info">Persona</th>
									<th class="text-center text-info">Status</th>
									<th class="text-center text-info">Plaza</th>
									<th class="text-center text-info">Promotor</th>
									<th class="text-center text-info">Analista</th>
									<th class="text-center text-info">Acciones</th>	
								</thead>
								<span class="text-info">Total de registros: {{ $registros11 }}</span>
								
								<tbody>
									@foreach($alejandra as $item)
									<tr>
										<td>{{ $item->id }}</td>
										<td>{{ $item->razon_social }}</td>							
										<td>{{ $item->nombre_comercial }}</td>

										<td class="text-center">
										@if ($item->tipo_cliente=='Directo')	
											<span class="fa fa-check-circle text-success"> {{ $item->tipo_cliente }}</span></td>								
										@elseif($item->tipo_cliente=='Indirecto')
											<span class="fa fa-refresh text-warning"> {{ $item->tipo_cliente }}</span></td>							
										@elseif($item->tipo_cliente=='Prospecto')
											<span class="fa fa-eye text-info"> {{ $item->tipo_cliente }}</span></td>
										@endif

										<td>{{ $item->persona }}</td>

																
										<td class="text-center">

										@if ($item->status=='Activo')
											<span class="badge badge-success">{{ $item->status }}</td></span>
										@else
											<span class="badge badge-danger">{{ $item->status }}</span>
										@endif
										</td>
										<td>{{ $item->plaza->descripcion }}</td>
										<td>{{ $item->promotor->nombre }}</td>
										<td>{{ $item->analista->nombre }}</td>
										

										<td style="text-align: center">
			                              @include('clientes.acciones')                          
			                          </td>
									</tr>
									@endforeach
								</tbody>
							</table>							
						</div>										                               
                </div>
                <div class="tab-pane fade" id="Anahi">
						<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center text-info">Id</th>
									<th class="text-center text-info">Razon Social</th>
									<th class="text-center text-info">Nombre Comercial</th>
									<th class="text-center text-info">Tipo de cliente</th>
									<th class="text-center text-info">Persona</th>
									<th class="text-center text-info">Status</th>
									<th class="text-center text-info">Plaza</th>
									<th class="text-center text-info">Promotor</th>
									<th class="text-center text-info">Analista</th>
									<th class="text-center text-info">Acciones</th>	
								</thead>
								<span class="text-info">Total de registros: {{ $registros6 }}</span>
								
								<tbody>
									@foreach($anahi as $item)
									<tr>
										<td>{{ $item->id }}</td>
										<td>{{ $item->razon_social }}</td>							
										<td>{{ $item->nombre_comercial }}</td>

										<td class="text-center">
										@if ($item->tipo_cliente=='Directo')	
											<span class="fa fa-check-circle text-success"> {{ $item->tipo_cliente }}</span></td>								
										@elseif($item->tipo_cliente=='Indirecto')
											<span class="fa fa-refresh text-warning"> {{ $item->tipo_cliente }}</span></td>							
										@elseif($item->tipo_cliente=='Prospecto')
											<span class="fa fa-eye text-info"> {{ $item->tipo_cliente }}</span></td>
										@endif

										<td>{{ $item->persona }}</td>

																
										<td class="text-center">

										@if ($item->status=='Activo')
											<span class="badge badge-success">{{ $item->status }}</td></span>
										@else
											<span class="badge badge-danger">{{ $item->status }}</span>
										@endif
										</td>
										<td>{{ $item->plaza->descripcion }}</td>
										<td>{{ $item->promotor->nombre }}</td>
										<td>{{ $item->analista->nombre }}</td>
										

										<td style="text-align: center">
			                              @include('clientes.acciones')                          
			                          </td>
									</tr>
									@endforeach
								</tbody>
							</table>							
						</div>										                               
                </div>
                <div class="tab-pane fade" id="Andrea">
						<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center text-info">Id</th>
									<th class="text-center text-info">Razon Social</th>
									<th class="text-center text-info">Nombre Comercial</th>
									<th class="text-center text-info">Tipo de cliente</th>
									<th class="text-center text-info">Persona</th>
									<th class="text-center text-info">Status</th>
									<th class="text-center text-info">Plaza</th>
									<th class="text-center text-info">Promotor</th>
									<th class="text-center text-info">Analista</th>
									<th class="text-center text-info">Acciones</th>	
								</thead>
								<span class="text-info">Total de registros: {{ $registros3 }}</span>
								
								<tbody>
									@foreach($andrea as $item)
									<tr>
										<td>{{ $item->id }}</td>
										<td>{{ $item->razon_social }}</td>							
										<td>{{ $item->nombre_comercial }}</td>

										<td class="text-center">
										@if ($item->tipo_cliente=='Directo')	
											<span class="fa fa-check-circle text-success"> {{ $item->tipo_cliente }}</span></td>								
										@elseif($item->tipo_cliente=='Indirecto')
											<span class="fa fa-refresh text-warning"> {{ $item->tipo_cliente }}</span></td>							
										@elseif($item->tipo_cliente=='Prospecto')
											<span class="fa fa-eye text-info"> {{ $item->tipo_cliente }}</span></td>
										@endif

										<td>{{ $item->persona }}</td>

																
										<td class="text-center">

										@if ($item->status=='Activo')
											<span class="badge badge-success">{{ $item->status }}</td></span>
										@else
											<span class="badge badge-danger">{{ $item->status }}</span>
										@endif
										</td>
										<td>{{ $item->plaza->descripcion }}</td>
										<td>{{ $item->promotor->nombre }}</td>
										<td>{{ $item->analista->nombre }}</td>
										

										<td style="text-align: center">
			                              @include('clientes.acciones')                          
			                          </td>
									</tr>
									@endforeach
								</tbody>
							</table>							
						</div>										                               
                </div>
                <div class="tab-pane fade" id="Angel">
						<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center text-info">Id</th>
									<th class="text-center text-info">Razon Social</th>
									<th class="text-center text-info">Nombre Comercial</th>
									<th class="text-center text-info">Tipo de cliente</th>
									<th class="text-center text-info">Persona</th>
									<th class="text-center text-info">Status</th>
									<th class="text-center text-info">Plaza</th>
									<th class="text-center text-info">Promotor</th>
									<th class="text-center text-info">Analista</th>
									<th class="text-center text-info">Acciones</th>	
								</thead>
								<span class="text-info">Total de registros: {{ $registros12 }}</span>
								
								<tbody>
									@foreach($angel as $item)
									<tr>
										<td>{{ $item->id }}</td>
										<td>{{ $item->razon_social }}</td>							
										<td>{{ $item->nombre_comercial }}</td>

										<td class="text-center">
										@if ($item->tipo_cliente=='Directo')	
											<span class="fa fa-check-circle text-success"> {{ $item->tipo_cliente }}</span></td>								
										@elseif($item->tipo_cliente=='Indirecto')
											<span class="fa fa-refresh text-warning"> {{ $item->tipo_cliente }}</span></td>							
										@elseif($item->tipo_cliente=='Prospecto')
											<span class="fa fa-eye text-info"> {{ $item->tipo_cliente }}</span></td>
										@endif

										<td>{{ $item->persona }}</td>

																
										<td class="text-center">

										@if ($item->status=='Activo')
											<span class="badge badge-success">{{ $item->status }}</td></span>
										@else
											<span class="badge badge-danger">{{ $item->status }}</span>
										@endif
										</td>
										<td>{{ $item->plaza->descripcion }}</td>
										<td>{{ $item->promotor->nombre }}</td>
										<td>{{ $item->analista->nombre }}</td>
										

										<td style="text-align: center">
			                              @include('clientes.acciones')                          
			                          </td>
									</tr>
									@endforeach
								</tbody>
							</table>							
						</div>										                               
                </div>
                
			</div>
  		</div>
   	</div>        		
</div>
		
@endsection