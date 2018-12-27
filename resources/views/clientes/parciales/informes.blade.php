<div class="container-fluid">
    <div class="card mb-12">
        <div class="card-body text-dark">
        	<h3 class="text-info">{{ $cliente->razon_social }}</h3>
            <ul class="nav nav-pills">
                  @if(!$ingenia->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Ingenia2">Ingenia &nbsp {{ number_format($poringenia)  }} %</i> </a>                          
                  @else
                  @endif

                  @if(!$aljez->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Aljez2">Aljez &nbsp {{ number_format($poraljez)  }} %</a>                    
                  @else                  
                  @endif

                  @if(!$ave->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Ave2">Ave &nbsp {{ number_format($porave)  }} %</a>                   
                  @else                  
                  
                  @endif
                  @if(!$busnes->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Busnes2">Busnes &nbsp {{ number_format($porbusnes)  }} %</a>                   
                  @else
                  
                  @endif
                  @if(!$enterprise->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Enterprise2">Enterprise &nbsp {{ number_format($porenterprise)  }} %</a>
                    
                  </li>
                  @else
                  
                  @endif
                  @if(!$daikon->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Daikon2">Daikon &nbsp {{ number_format($pordaikon)  }} %</a>
                    
                  </li>
                  @else
                  
                  @endif
                  @if(!$dyc->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#dyc2">DYC &nbsp {{ number_format($pordyc)  }} %</a>
                    
                  </li>
                  @else
                  
                  @endif
                  @if(!$centro->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Centro2">Centro &nbsp {{ number_format($porcentro)  }} %</a>
                    
                  </li>
                  @else
                  
                  @endif
                  @if(!$s4u->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#S4U2">S4U &nbsp {{ number_format($pors4u)  }} %</a>
                    
                  </li>
                  @else
                  
                  @endif
                  @if(!$lv->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#LV2">L&V &nbsp {{ number_format($porlv)  }} %</a>
                   
                  </li>
                  @else                                   
                  
                  @endif
                  @if(!$aportaciones->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Aportaciones2">Aportaciones &nbsp {{ number_format($poraportaciones)  }} %</a>
                   
                  </li>
                  @else
                  
                  @endif

                  @if(!$consorcio->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Consorcio2">Consorcio &nbsp {{ number_format($porconsorcio)  }} %</a>
                   
                  @else
                  
                  @endif				   

                  @if(!$tt->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#TT2">TT proyectos &nbsp {{ number_format($portt)  }} %</a>
                    
                  @else
                  
                  @endif
            </ul>
            <div id="myTabContent" class="tab-content">
              	<style>
			            .text-white {
			                      color: #835223;
			                      font-family: 'verdana';
			                      font-weight: bold;
			                      font-size: 15px;			                      
			                  } 
		        </style>                  
                <div class="tab-pane fade" id="Ingenia2">
						<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover table-sm">
								<thead style="background-color: #039BE5">
									<th class="text-center text-white">Id</th>
									{{-- <th class="text-center text-white">Empresa</th> --}}		
									<th class="text-center text-white">Ejercicio</th>		
									<th class="text-center text-white">Periodo</th>				
									<th class="text-center text-white">Concepto</th>
									<th class="text-center text-white">Importe pesos</th>
									<th class="text-center text-white">Importe dolares</th>
									<th class="text-center text-white">Status</th>
									<th class="text-center text-white">Facturas</th>													
									<th class="text-center text-white">PDF informe</th>
									<th class="text-center text-white">Acciones</th>		
								</thead>								
								<tbody>
									<tr>
									@foreach($ingenia as $item)
										<td>{{ $item->id }}</td>	
										{{-- <td>{{ $item->empresa->razon_social }}</td> --}}
										
										<td>{{ $item->ejercicio }}</td>	
										<td>{{ $item->periodo }}</td>	
										<td>{{ $item->concepto }}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>
										
										<td class="text-center">

										@if ($item->status=='Concluido')
											<span class="badge badge-success"><i class="fa fa-check"> </i> {{ $item->status }}</td></span>
										@elseif($item->status=='No Aplica')
											<span class="badge badge-warning"><i class="fa fa-times"> </i> {{ $item->status }}</span>
										@elseif($item->status=='En Proceso')
											<span class="badge badge-info"><i class="fa fa-cogs"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Elaborado')
											<span class="badge badge-primary"><i class="fa fa-print"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Negativa')
											<span class="badge badge-danger"><i class="fa fa-thumbs-down"> </i> {{ $item->status }}</span>	
										@endif	
											
										</td>

										<td class="text-center">
										  @if($item->facturacion==null)              
							              @else
							              	<span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->facturacion }} "target=blank" class="card-link">&nbsp Facturas</a></span>
							              @endif
										</td>

										<td class="text-center">
										  @if($item->informepdf==null)              
							              @else
							              	<span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->informepdf }} "target=blank" class="card-link">&nbsp Informe</a></span>
							              @endif
										</td>
										<td style="text-align: center">
                        @include('informes.acciones')                          
                      </td>																				
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>											                               
                </div>
                <div class="tab-pane fade" id="Consorcio2">
						<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover table-sm">
								<thead style="background-color: #039BE5">
									<th class="text-center text-white">Id</th>
									{{-- <th class="text-center text-white">Empresa</th> --}}		
									<th class="text-center text-white">Ejercicio</th>		
									<th class="text-center text-white">Periodo</th>				
									<th class="text-center text-white">Concepto</th>
									<th class="text-center text-white">Importe pesos</th>
									<th class="text-center text-white">Importe dolares</th>
									<th class="text-center text-white">Status</th>
									<th class="text-center text-white">Facturas</th>													
									<th class="text-center text-white">PDF informe</th>
									<th class="text-center text-white">Acciones</th>		
								</thead>								
								<tbody>
									<tr>
									@foreach($consorcio as $item)
										<td>{{ $item->id }}</td>	
										{{-- <td>{{ $item->empresa->razon_social }}</td> --}}
										
										<td>{{ $item->ejercicio }}</td>	
										<td>{{ $item->periodo }}</td>	
										<td>{{ $item->concepto }}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>
										
										<td class="text-center">

										@if ($item->status=='Concluido')
								<span class="badge badge-success"><i class="fa fa-check"> </i> {{ $item->status }}</td></span>
										@elseif($item->status=='No Aplica')
											<span class="badge badge-warning"><i class="fa fa-times"> </i> {{ $item->status }}</span>
										@elseif($item->status=='En Proceso')
											<span class="badge badge-info"><i class="fa fa-cogs"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Elaborado')
											<span class="badge badge-primary"><i class="fa fa-print"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Negativa')
											<span class="badge badge-danger"><i class="fa fa-thumbs-down"> </i> {{ $item->status }}</span>	
										@endif		
											
										</td>

										<td class="text-center">
										  @if($item->facturacion==null)              
							              @else
							              	<span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->facturacion }} "target=blank" class="card-link">&nbsp Facturas</a></span>
							              @endif
										</td>

										<td class="text-center">
										  @if($item->informepdf==null)              
							              @else
							              	<span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->informepdf }} "target=blank" class="card-link">&nbsp Informe</a></span>
							              @endif
										</td>
										<td style="text-align: center">
				                        @include('informes.acciones')                          
				                      </td>																				
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>											                               
                </div>
                <div class="tab-pane fade" id="Aljez2">
	                	<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover table-sm">
								<thead style="background-color: #039BE5">
									<th class="text-center text-white">Id</th>
									{{-- <th class="text-center text-white">Empresa</th> --}}		
									<th class="text-center text-white">Ejercicio</th>		
									<th class="text-center text-white">Periodo</th>				
									<th class="text-center text-white">Concepto</th>
									<th class="text-center text-white">Importe pesos</th>
									<th class="text-center text-white">Importe dolares</th>
									<th class="text-center text-white">Status</th>
									<th class="text-center text-white">Facturas</th>
									<th class="text-center text-white">PDF informe</th>
									<th class="text-center text-white">Acciones</th>															
								</thead>								
								<tbody>
									<tr>
									@foreach($aljez as $item)
										<td>{{ $item->id }}</td>	
										{{-- <td>{{ $item->empresa->razon_social }}</td> --}}
										
										<td>{{ $item->ejercicio }}</td>	
										<td>{{ $item->periodo }}</td>	
										<td>{{ $item->concepto }}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>
										
										<td class="text-center">

										@if ($item->status=='Concluido')
											<span class="badge badge-success"><i class="fa fa-check"> </i> {{ $item->status }}</td></span>
										@elseif($item->status=='No Aplica')
											<span class="badge badge-warning"><i class="fa fa-times"> </i> {{ $item->status }}</span>
										@elseif($item->status=='En Proceso')
											<span class="badge badge-info"><i class="fa fa-cogs"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Elaborado')
											<span class="badge badge-primary"><i class="fa fa-print"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Negativa')
											<span class="badge badge-danger"><i class="fa fa-thumbs-down"> </i> {{ $item->status }}</span>	
										@endif	
											
										</td>

										<td>
										  @if($item->facturacion==null)              
							              @else
							              	<span class="fa fa-download text-info text-center"><a href="../expedientesf/{{ $item->facturacion }} "target=blank" class="card-link">&nbsp Facturas</a></span>
							              @endif
										</td>
										<td class="text-center">
										  @if($item->informepdf==null)              
							              @else
							              	<span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->informepdf }} "target=blank" class="card-link">&nbsp Informe</a></span>
							              @endif
										</td>
										<td style="text-align: center">
                        @include('informes.acciones')                          
                      </td>
																				
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>                  	                					       
			    </div>                 
              	<div class="tab-pane fade" id="Ave2">
	              		<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover table-sm">
								<thead style="background-color: #039BE5">
									<th class="text-center text-white">Id</th>
									{{-- <th class="text-center text-white">Empresa</th> --}}		
									<th class="text-center text-white">Ejercicio</th>		
									<th class="text-center text-white">Periodo</th>				
									<th class="text-center text-white">Concepto</th>
									<th class="text-center text-white">Importe pesos</th>
									<th class="text-center text-white">Importe dolares</th>
									<th class="text-center text-white">Status</th>
									<th class="text-center text-white">Facturas</th>
									<th class="text-center text-white">PDF informe</th>	
									<th class="text-center text-white">Acciones</th>									
								</thead>								
								<tbody>
									<tr>
									@foreach($ave as $item)
										<td>{{ $item->id }}</td>	
										{{-- <td>{{ $item->empresa->razon_social }}</td> --}}
										
										<td>{{ $item->ejercicio }}</td>	
										<td>{{ $item->periodo }}</td>	
										<td>{{ $item->concepto }}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>
										
										<td class="text-center">

										@if ($item->status=='Concluido')
											<span class="badge badge-success"><i class="fa fa-check"> </i> {{ $item->status }}</td></span>
										@elseif($item->status=='No Aplica')
											<span class="badge badge-warning"><i class="fa fa-times"> </i> {{ $item->status }}</span>
										@elseif($item->status=='En Proceso')
											<span class="badge badge-info"><i class="fa fa-cogs"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Elaborado')
											<span class="badge badge-primary"><i class="fa fa-print"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Negativa')
											<span class="badge badge-danger"><i class="fa fa-thumbs-down"> </i> {{ $item->status }}</span>	
										@endif	
											
										</td>

										<td>
										  @if($item->facturacion==null)              
							              @else
							              	<span class="fa fa-download text-info text-center"><a href="../expedientesf/{{ $item->facturacion }} "target=blank" class="card-link">&nbsp Facturas</a></span>
							              @endif
										</td>
										<td class="text-center">
										  @if($item->informepdf==null)              
							              @else
							              	<span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->informepdf }} "target=blank" class="card-link">&nbsp Informe</a></span>
							              @endif
										</td>
										<td style="text-align: center">
                        @include('informes.acciones')                          
                      </td>
																				
									</tr>
										  @endforeach
								</tbody>
							</table>
						</div>	              		                  			  
			    </div>
			    <div class="tab-pane fade" id="Busnes2">
	              		<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover table-sm">
								<thead style="background-color: #039BE5">
									<th class="text-center text-white">Id</th>
									{{-- <th class="text-center text-white">Empresa</th> --}}		
									<th class="text-center text-white">Ejercicio</th>		
									<th class="text-center text-white">Periodo</th>				
									<th class="text-center text-white">Concepto</th>
									<th class="text-center text-white">Importe pesos</th>
									<th class="text-center text-white">Importe dolares</th>
									<th class="text-center text-white">Status</th>
									<th class="text-center text-white">Facturas</th>
									<th class="text-center text-white">PDF informe</th>	
									<th class="text-center text-white">Acciones</th>				
										
								</thead>
								
								
								<tbody>
									<tr>
									@foreach($busnes as $item)
										<td>{{ $item->id }}</td>	
										{{-- <td>{{ $item->empresa->razon_social }}</td> --}}
										
										<td>{{ $item->ejercicio }}</td>	
										<td>{{ $item->periodo }}</td>	
										<td>{{ $item->concepto }}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>
										
										<td class="text-center">

										@if ($item->status=='Concluido')
											<span class="badge badge-success"><i class="fa fa-check"> </i> {{ $item->status }}</td></span>
										@elseif($item->status=='No Aplica')
											<span class="badge badge-warning"><i class="fa fa-times"> </i> {{ $item->status }}</span>
										@elseif($item->status=='En Proceso')
											<span class="badge badge-info"><i class="fa fa-cogs"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Elaborado')
											<span class="badge badge-primary"><i class="fa fa-print"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Negativa')
											<span class="badge badge-danger"><i class="fa fa-thumbs-down"> </i> {{ $item->status }}</span>	
										@endif	
											
										</td>

										<td>
										  @if($item->facturacion==null)              
							              @else
							              	<span class="fa fa-download text-info text-center"><a href="../expedientesf/{{ $item->facturacion }} "target=blank" class="card-link">&nbsp Facturas</a></span>
							              @endif
										</td>
										<td class="text-center">
										  @if($item->informepdf==null)              
							              @else
							              	<span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->informepdf }} "target=blank" class="card-link">&nbsp Informe</a></span>
							              @endif
										</td>
										<td style="text-align: center">
                        @include('informes.acciones')                          
                      </td>
																				
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>	              		                  			  
			    </div>
			    <div class="tab-pane fade" id="Daikon2">
	              		<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover table-sm">
								<thead style="background-color: #039BE5">
									<th class="text-center text-white">Id</th>
									{{-- <th class="text-center text-white">Empresa</th> --}}		
									<th class="text-center text-white">Ejercicio</th>		
									<th class="text-center text-white">Periodo</th>				
									<th class="text-center text-white">Concepto</th>
									<th class="text-center text-white">Importe pesos</th>
									<th class="text-center text-white">Importe dolares</th>
									<th class="text-center text-white">Status</th>
									<th class="text-center text-white">Facturas</th>
									<th class="text-center text-white">PDF informe</th>
									<th class="text-center text-white">Acciones</th>					
										
								</thead>
								
								
								<tbody>
									<tr>
									@foreach($daikon as $item)
										<td>{{ $item->id }}</td>	
										{{-- <td>{{ $item->empresa->razon_social }}</td> --}}
										
										<td>{{ $item->ejercicio }}</td>	
										<td>{{ $item->periodo }}</td>	
										<td>{{ $item->concepto }}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>
										
										<td class="text-center">

										@if ($item->status=='Concluido')
											<span class="badge badge-success"><i class="fa fa-check"> </i> {{ $item->status }}</td></span>
										@elseif($item->status=='No Aplica')
											<span class="badge badge-warning"><i class="fa fa-times"> </i> {{ $item->status }}</span>
										@elseif($item->status=='En Proceso')
											<span class="badge badge-info"><i class="fa fa-cogs"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Elaborado')
											<span class="badge badge-primary"><i class="fa fa-print"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Negativa')
											<span class="badge badge-danger"><i class="fa fa-thumbs-down"> </i> {{ $item->status }}</span>	
										@endif	
											
										</td>

										<td>
										  @if($item->facturacion==null)              
							              @else
							              	<span class="fa fa-download text-info text-center"><a href="../expedientesf/{{ $item->facturacion }} "target=blank" class="card-link">&nbsp Facturas</a></span>
							              @endif
										</td>
										<td class="text-center">
										  @if($item->informepdf==null)              
							              @else
							              	<span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->informepdf }} "target=blank" class="card-link">&nbsp Informe</a></span>
							              @endif
										</td>
										<td style="text-align: center">
                        @include('informes.acciones')                          
                      </td>
																				
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>	              		                  			  
			    </div>
			    <div class="tab-pane fade" id="Enterprise2">
	              		<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover table-sm">
								<thead style="background-color: #039BE5">
									<th class="text-center text-white">Id</th>
									{{-- <th class="text-center text-white">Empresa</th> --}}		
									<th class="text-center text-white">Ejercicio</th>		
									<th class="text-center text-white">Periodo</th>				
									<th class="text-center text-white">Concepto</th>
									<th class="text-center text-white">Importe pesos</th>
									<th class="text-center text-white">Importe dolares</th>
									<th class="text-center text-white">Status</th>
									<th class="text-center text-white">Facturas</th>
									<th class="text-center text-white">PDF informe</th>	
									<th class="text-center text-white">Acciones</th>				
										
								</thead>
								
								
								<tbody>
									<tr>
									@foreach($enterprise as $item)
										<td>{{ $item->id }}</td>	
										{{-- <td>{{ $item->empresa->razon_social }}</td> --}}
										
										<td>{{ $item->ejercicio }}</td>	
										<td>{{ $item->periodo }}</td>	
										<td>{{ $item->concepto }}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>
										
										<td class="text-center">

										@if ($item->status=='Concluido')
											<span class="badge badge-success"><i class="fa fa-check"> </i> {{ $item->status }}</td></span>
										@elseif($item->status=='No Aplica')
											<span class="badge badge-warning"><i class="fa fa-times"> </i> {{ $item->status }}</span>
										@elseif($item->status=='En Proceso')
											<span class="badge badge-info"><i class="fa fa-cogs"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Elaborado')
											<span class="badge badge-primary"><i class="fa fa-print"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Negativa')
											<span class="badge badge-danger"><i class="fa fa-thumbs-down"> </i> {{ $item->status }}</span>	
										@endif	
											
										</td>

										<td>
										  @if($item->facturacion==null)              
							              @else
							              	<span class="fa fa-download text-info text-center"><a href="../expedientesf/{{ $item->facturacion }} "target=blank" class="card-link">&nbsp Facturas</a></span>
							              @endif
										</td>
										<td class="text-center">
										  @if($item->informepdf==null)              
							              @else
							              	<span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->informepdf }} "target=blank" class="card-link">&nbsp Informe</a></span>
							              @endif
										</td>
										<td style="text-align: center">
                        @include('informes.acciones')                          
                      </td>
																				
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>	              		                  			  
			    </div>
			    <div class="tab-pane fade" id="S4U2">
	              		<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover table-sm">
								<thead style="background-color: #039BE5">
									<th class="text-center text-white">Id</th>
									{{-- <th class="text-center text-white">Empresa</th> --}}		
									<th class="text-center text-white">Ejercicio</th>		
									<th class="text-center text-white">Periodo</th>				
									<th class="text-center text-white">Concepto</th>
									<th class="text-center text-white">Importe pesos</th>
									<th class="text-center text-white">Importe dolares</th>
									<th class="text-center text-white">Status</th>
									<th class="text-center text-white">Facturas</th>
									<th class="text-center text-white">PDF informe</th>	
									<th class="text-center text-white">Acciones</th>				
										
								</thead>
								
								
								<tbody>
									<tr>
									@foreach($s4u as $item)
										<td>{{ $item->id }}</td>	
										{{-- <td>{{ $item->empresa->razon_social }}</td> --}}
										
										<td>{{ $item->ejercicio }}</td>	
										<td>{{ $item->periodo }}</td>	
										<td>{{ $item->concepto }}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>
										
										<td class="text-center">

										@if ($item->status=='Concluido')
											<span class="badge badge-success"><i class="fa fa-check"> </i> {{ $item->status }}</td></span>
										@elseif($item->status=='No Aplica')
											<span class="badge badge-warning"><i class="fa fa-times"> </i> {{ $item->status }}</span>
										@elseif($item->status=='En Proceso')
											<span class="badge badge-info"><i class="fa fa-cogs"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Elaborado')
											<span class="badge badge-primary"><i class="fa fa-print"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Negativa')
											<span class="badge badge-danger"><i class="fa fa-thumbs-down"> </i> {{ $item->status }}</span>	
										@endif	
											
										</td>

										<td>
										  @if($item->facturacion==null)              
							              @else
							              	<span class="fa fa-download text-info text-center"><a href="../expedientesf/{{ $item->facturacion }} "target=blank" class="card-link">&nbsp Facturas</a></span>
							              @endif
										</td>
										<td class="text-center">
										  @if($item->informepdf==null)              
							              @else
							              	<span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->informepdf }} "target=blank" class="card-link">&nbsp Informe</a></span>
							              @endif
										</td>
										<td style="text-align: center">
                        @include('informes.acciones')                          
                      </td>
																				
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>	              		                  			  
			    </div> 
			    <div class="tab-pane fade" id="Centro2">
	              		<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover table-sm">
								<thead style="background-color: #039BE5">
									<th class="text-center text-white">Id</th>
									{{-- <th class="text-center text-white">Empresa</th> --}}		
									<th class="text-center text-white">Ejercicio</th>		
									<th class="text-center text-white">Periodo</th>				
									<th class="text-center text-white">Concepto</th>
									<th class="text-center text-white">Importe pesos</th>
									<th class="text-center text-white">Importe dolares</th>
									<th class="text-center text-white">Status</th>
									<th class="text-center text-white">Facturas</th>
									<th class="text-center text-white">PDF informe</th>	
									<th class="text-center text-white">Acciones</th>				
										
								</thead>
								
								
								<tbody>
									<tr>
									@foreach($centro as $item)
										<td>{{ $item->id }}</td>	
										{{-- <td>{{ $item->empresa->razon_social }}</td> --}}
										
										<td>{{ $item->ejercicio }}</td>	
										<td>{{ $item->periodo }}</td>	
										<td>{{ $item->concepto }}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>
										
										<td class="text-center">

										@if ($item->status=='Concluido')
											<span class="badge badge-success"><i class="fa fa-check"> </i> {{ $item->status }}</td></span>
										@elseif($item->status=='No Aplica')
											<span class="badge badge-warning"><i class="fa fa-times"> </i> {{ $item->status }}</span>
										@elseif($item->status=='En Proceso')
											<span class="badge badge-info"><i class="fa fa-cogs"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Elaborado')
											<span class="badge badge-primary"><i class="fa fa-print"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Negativa')
											<span class="badge badge-danger"><i class="fa fa-thumbs-down"> </i> {{ $item->status }}</span>	
										@endif	
											
										</td>

										<td>
										  @if($item->facturacion==null)              
							              @else
							              	<span class="fa fa-download text-info text-center"><a href="../expedientesf/{{ $item->facturacion }} "target=blank" class="card-link">&nbsp Facturas</a></span>
							              @endif
										</td>
										<td class="text-center">
										  @if($item->informepdf==null)              
							              @else
							              	<span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->informepdf }} "target=blank" class="card-link">&nbsp Informe</a></span>
							              @endif
										</td>
										<td style="text-align: center">
                        @include('informes.acciones')                          
                      </td>
																				
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>	              		                  			  
			    </div> 
			    <div class="tab-pane fade" id="dyc2">
	              		<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover table-sm">
								<thead style="background-color: #039BE5">
									<th class="text-center text-white">Id</th>
									{{-- <th class="text-center text-white">Empresa</th> --}}		
									<th class="text-center text-white">Ejercicio</th>		
									<th class="text-center text-white">Periodo</th>				
									<th class="text-center text-white">Concepto</th>
									<th class="text-center text-white">Importe pesos</th>
									<th class="text-center text-white">Importe dolares</th>
									<th class="text-center text-white">Status</th>
									<th class="text-center text-white">Facturas</th>
									<th class="text-center text-white">PDF informe</th>	
									<th class="text-center text-white">Acciones</th>				
										
								</thead>
								
								
								<tbody>
									<tr>
									@foreach($dyc as $item)
										<td>{{ $item->id }}</td>	
										{{-- <td>{{ $item->empresa->razon_social }}</td> --}}
										
										<td>{{ $item->ejercicio }}</td>	
										<td>{{ $item->periodo }}</td>	
										<td>{{ $item->concepto }}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>
										
										<td class="text-center">

										@if ($item->status=='Concluido')
											<span class="badge badge-success"><i class="fa fa-check"> </i> {{ $item->status }}</td></span>
										@elseif($item->status=='No Aplica')
											<span class="badge badge-warning"><i class="fa fa-times"> </i> {{ $item->status }}</span>
										@elseif($item->status=='En Proceso')
											<span class="badge badge-info"><i class="fa fa-cogs"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Elaborado')
											<span class="badge badge-primary"><i class="fa fa-print"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Negativa')
											<span class="badge badge-danger"><i class="fa fa-thumbs-down"> </i> {{ $item->status }}</span>	
										@endif	
											
										</td>

										<td>
										  @if($item->facturacion==null)              
							              @else
							              	<span class="fa fa-download text-info text-center"><a href="../expedientesf/{{ $item->facturacion }} "target=blank" class="card-link">&nbsp Facturas</a></span>
							              @endif
										</td>
										<td class="text-center">
										  @if($item->informepdf==null)              
							              @else
							              	<span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->informepdf }} "target=blank" class="card-link">&nbsp Informe</a></span>
							              @endif
										</td>
										<td style="text-align: center">
                        @include('informes.acciones')                          
                      </td>
																				
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>	              		                  			  
			    </div>
			    <div class="tab-pane fade" id="Aportaciones2">
	              		<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover table-sm">
								<thead style="background-color: #039BE5">
									<th class="text-center text-white">Id</th>
									{{-- <th class="text-center text-white">Empresa</th> --}}		
									<th class="text-center text-white">Ejercicio</th>		
									<th class="text-center text-white">Periodo</th>				
									<th class="text-center text-white">Concepto</th>
									<th class="text-center text-white">Importe pesos</th>
									<th class="text-center text-white">Importe dolares</th>
									<th class="text-center text-white">Status</th>
									<th class="text-center text-white">Facturas</th>
									<th class="text-center text-white">PDF informe</th>	
									<th class="text-center text-white">Acciones</th>				
										
								</thead>
								
								
								<tbody>
									<tr>
									@foreach($aportaciones as $item)
										<td>{{ $item->id }}</td>	
										{{-- <td>{{ $item->empresa->razon_social }}</td> --}}
										
										<td>{{ $item->ejercicio }}</td>	
										<td>{{ $item->periodo }}</td>	
										<td>{{ $item->concepto }}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>
										
										<td class="text-center">

										@if ($item->status=='Concluido')
											<span class="badge badge-success"><i class="fa fa-check"> </i> {{ $item->status }}</td></span>
										@elseif($item->status=='No Aplica')
											<span class="badge badge-warning"><i class="fa fa-times"> </i> {{ $item->status }}</span>
										@elseif($item->status=='En Proceso')
											<span class="badge badge-info"><i class="fa fa-cogs"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Elaborado')
											<span class="badge badge-primary"><i class="fa fa-print"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Negativa')
											<span class="badge badge-danger"><i class="fa fa-thumbs-down"> </i> {{ $item->status }}</span>	
										@endif	
											
										</td>

										<td>
										  @if($item->facturacion==null)              
							              @else
							              	<span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->facturacion }} "target=blank" class="card-link">&nbsp Facturas</a></span>
							              @endif
										</td>
										<td class="text-center">
										  @if($item->informepdf==null)              
							              @else
							              	<span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->informepdf }} "target=blank" class="card-link">&nbsp Informe</a></span>
							              @endif
										</td>
										<td style="text-align: center">
                        					@include('informes.acciones')                          
                      					</td>
																				
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>	              		                  			  
			    </div>
			    <div class="tab-pane fade" id="LV2">
	              		<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover table-sm">
								<thead style="background-color: #039BE5">
									<th class="text-center text-white">Id</th>
									{{-- <th class="text-center text-white">Empresa</th> --}}		
									<th class="text-center text-white">Ejercicio</th>		
									<th class="text-center text-white">Periodo</th>				
									<th class="text-center text-white">Concepto</th>
									<th class="text-center text-white">Importe pesos</th>
									<th class="text-center text-white">Importe dolares</th>
									<th class="text-center text-white">Status</th>
									<th class="text-center text-white">Facturas</th>
									<th class="text-center text-white">PDF informe</th>	
									<th class="text-center text-white">Acciones</th>				
										
								</thead>
								
								
								<tbody>
									<tr>
									@foreach($lv as $item)
										<td>{{ $item->id }}</td>	
										{{-- <td>{{ $item->empresa->razon_social }}</td> --}}
										
										<td>{{ $item->ejercicio }}</td>	
										<td>{{ $item->periodo }}</td>	
										<td>{{ $item->concepto }}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>
										
										<td class="text-center">

										@if ($item->status=='Concluido')
											<span class="badge badge-success"><i class="fa fa-check"> </i> {{ $item->status }}</td></span>
										@elseif($item->status=='No Aplica')
											<span class="badge badge-warning"><i class="fa fa-times"> </i> {{ $item->status }}</span>
										@elseif($item->status=='En Proceso')
											<span class="badge badge-info"><i class="fa fa-cogs"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Elaborado')
											<span class="badge badge-primary"><i class="fa fa-print"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Negativa')
											<span class="badge badge-danger"><i class="fa fa-thumbs-down"> </i> {{ $item->status }}</span>	
										@endif	
											
										</td>

										<td>
										  @if($item->facturacion==null)              
							              @else
							              	<span class="fa fa-download text-info text-center"><a href="../expedientesf/{{ $item->facturacion }} "target=blank" class="card-link">&nbsp Informe</a></span>
							              @endif
										</td>
										<td class="text-center">
										  @if($item->informepdf==null)              
							              @else
							              	<span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->informepdf }} "target=blank" class="card-link">&nbsp Informe</a></span>
							              @endif
										</td>
																				
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>	              		                  			  
			    </div>

			    <div class="tab-pane fade" id="TT2">
	              		<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover table-sm">
								<thead style="background-color: #039BE5">
									<th class="text-center text-white">Id</th>
									{{-- <th class="text-center text-white">Empresa</th> --}}		
									<th class="text-center text-white">Ejercicio</th>		
									<th class="text-center text-white">Periodo</th>				
									<th class="text-center text-white">Concepto</th>
									<th class="text-center text-white">Importe pesos</th>
									<th class="text-center text-white">Importe dolares</th>
									<th class="text-center text-white">Status</th>
									<th class="text-center text-white">Facturas</th>
									<th class="text-center text-white">PDF informe</th>	
									<th class="text-center text-white">Acciones</th>				
										
								</thead>
								
								
								<tbody>
									<tr>
									@foreach($tt as $item)
										<td>{{ $item->id }}</td>	
										{{-- <td>{{ $item->empresa->razon_social }}</td> --}}
										
										<td>{{ $item->ejercicio }}</td>	
										<td>{{ $item->periodo }}</td>	
										<td>{{ $item->concepto }}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>
										
										<td class="text-center">

										@if ($item->status=='Concluido')
											<span class="badge badge-success"><i class="fa fa-check"> </i> {{ $item->status }}</td></span>
										@elseif($item->status=='No Aplica')
											<span class="badge badge-warning"><i class="fa fa-times"> </i> {{ $item->status }}</span>
										@elseif($item->status=='En Proceso')
											<span class="badge badge-info"><i class="fa fa-cogs"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Elaborado')
											<span class="badge badge-primary"><i class="fa fa-print"> </i> {{ $item->status }}</span>
										@elseif($item->status=='Negativa')
											<span class="badge badge-danger"><i class="fa fa-thumbs-down"> </i> {{ $item->status }}</span>	
										@endif--	
											
										</td>

										<td>
										  @if($item->facturacion==null)              
							              @else
							              	<span class="fa fa-download text-info text-center"><a href="../expedientesf/{{ $item->facturacion }} "target=blank" class="card-link">&nbsp Facturas</a></span>
							              @endif
										</td>
										<td class="text-center">
										  @if($item->informepdf==null)              
							              @else
							              	<span class="fa fa-download text-info"><a href="../expedientesf/{{ $item->informepdf }} "target=blank" class="card-link">&nbsp Informe</a></span>
							              @endif
										</td>
										<td style="text-align: center">
                        					@include('informes.acciones')                          
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


