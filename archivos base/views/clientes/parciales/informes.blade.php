<div class="container-fluid">
    <div class="card mb-12">
        <div class="card-body text-dark">
        	<h3 class="text-info">{{ $cliente->razon_social }}</h3>
            <ul class="nav nav-tabs">
                  @if(!$ingenia->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Ingenia2">Ingenia</a>
                    <br>
                    <div class="progress">
				    	<div class="progress-bar" role="progressbar" style="width: {{number_format($poringenia) }}%"> 
				    		{{ number_format($poringenia)  }} %				    	
				    	</div>
				    </div>	
                  </li>                 
                  @else

                  @endif

                  @if(!$aljez->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Aljez2">Aljez</a>
                    <br>
                    <div class="progress">
				    	<div class="progress-bar" role="progressbar" style="width: {{number_format($poraljez) }}%"> 
				    		{{number_format($poraljez) }} %				    	
				    	</div>
				    </div>
                  </li>
                  @else                  
                  @endif

                  @if(!$ave->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Ave2">Ave</a>
                    <br>
                   <div class="progress">
				    	<div class="progress-bar" role="progressbar" style="width: {{number_format($porave) }}%"> 
				    		{{number_format($porave) }} %				    	
				    	</div>
				    </div>
                  </li>
                  @else                  
                  
                  @endif
                  @if(!$busnes->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Busnes2">Busnes</a>
                    <br>
                    <div class="progress">
				    	<div class="progress-bar" role="progressbar" style="width: {{number_format($porbusnes) }}%"> 
				    		{{number_format($porbusnes) }} %				    	
				    	</div>
				    </div>
                  </li>
                  @else
                  
                  @endif
                  @if(!$enterprise->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Enterprise2">Enterprise</a>
                    <br>
                    <div class="progress">
				    	<div class="progress-bar" role="progressbar" style="width: {{number_format($porenterprise) }}%"> 
				    		{{number_format($porenterprise) }} %				    	
				    	</div>
				    </div>
                  </li>
                  @else
                  
                  @endif
                  @if(!$daikon->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Daikon2">Daikon</a>
                    <br>
                    <div class="progress">
				    	<div class="progress-bar" role="progressbar" style="width: {{number_format($pordaikon) }}%"> 
				    		{{number_format($pordaikon) }} %				    	
				    	</div>
				    </div>
                  </li>
                  @else
                  
                  @endif
                  @if(!$dyc->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#dyc2">DYC</a>
                    <br>
                    <div class="progress">
				    	<div class="progress-bar" role="progressbar" style="width: {{number_format($pordyc) }}%"> 
				    		{{number_format($pordyc) }} %				    	
				    	</div>
				    </div>
                  </li>
                  @else
                  
                  @endif
                  @if(!$centro->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Centro2">Centro</a>
                    <br>
                    <div class="progress">
				    	<div class="progress-bar" role="progressbar" style="width: {{number_format($porcentro) }}%"> 
				    		{{number_format($porcentro) }} %				    	
				    	</div>
				    </div>
                  </li>
                  @else
                  
                  @endif
                  @if(!$s4u->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#S4U2">S4U</a>
                    <br>
                    <div class="progress">
				    	<div class="progress-bar" role="progressbar" style="width: {{number_format($pors4u) }}%"> 
				    		{{number_format($pors4u) }} %				    	
				    	</div>
				    </div>
                  </li>
                  @else
                  
                  @endif
                  @if(!$lv->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#LV2">L&V</a>
                    <br>
                    <div class="progress">
				    	<div class="progress-bar" role="progressbar" style="width: {{number_format($porlv) }}%"> 
				    		{{number_format($porlv) }} %				    	
				    	</div>
				    </div>
                  </li>
                  @else                                   
                  
                  @endif
                  @if(!$aportaciones->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Aportaciones2">Aportaciones</a>
                    <br>
                    <div class="progress">
				    	<div class="progress-bar" role="progressbar" style="width: {{ number_format($poraportaciones) }}%"> 
				    		{{ number_format($poraportaciones) }} %				    	
				    	</div>
				    </div>
                  </li>
                  @else
                  
                  @endif

                  @if(!$consorcio->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Consorcio2">Consorcio</a>
                    <br>
                    <div class="progress">
				    	<div class="progress-bar" role="progressbar" style="width: {{ number_format($porconsorcio) }}%"> 
				    		{{ number_format($porconsorcio) }} %				    	
				    	</div>
				    </div>
                  </li>
                  @else
                  
                  @endif				   

                  @if(!$tt->isEmpty())
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#TT2">TT proyectos</a>
                    <br>
                    <div class="progress">
				    	<div class="progress-bar" role="progressbar" style="width: {{ number_format($portt) }}%"> 
				    		{{ number_format($portt) }} %				    	
				    	</div>
				    </div>
                  </li>
                  @else
                  
                  @endif
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
                <div class="tab-pane fade" id="Ingenia2">
						<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center letras">Id</th>
									{{-- <th class="text-center letras">Empresa</th> --}}		
									<th class="text-center letras">Ejercicio</th>		
									<th class="text-center letras">Periodo</th>				
									<th class="text-center letras">Concepto</th>
									<th class="text-center letras">Importe pesos</th>
									<th class="text-center letras">Importe dolares</th>
									<th class="text-center letras">Status</th>
									<th class="text-center letras">Facturas</th>													
									<th class="text-center letras">PDF informe</th>
									<th class="text-center letras">Acciones</th>		
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
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center letras">Id</th>
									{{-- <th class="text-center letras">Empresa</th> --}}		
									<th class="text-center letras">Ejercicio</th>		
									<th class="text-center letras">Periodo</th>				
									<th class="text-center letras">Concepto</th>
									<th class="text-center letras">Importe pesos</th>
									<th class="text-center letras">Importe dolares</th>
									<th class="text-center letras">Status</th>
									<th class="text-center letras">Facturas</th>													
									<th class="text-center letras">PDF informe</th>
									<th class="text-center letras">Acciones</th>		
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
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center letras">Id</th>
									{{-- <th class="text-center letras">Empresa</th> --}}		
									<th class="text-center letras">Ejercicio</th>		
									<th class="text-center letras">Periodo</th>				
									<th class="text-center letras">Concepto</th>
									<th class="text-center letras">Importe pesos</th>
									<th class="text-center letras">Importe dolares</th>
									<th class="text-center letras">Status</th>
									<th class="text-center letras">Facturas</th>
									<th class="text-center letras">PDF informe</th>
									<th class="text-center letras">Acciones</th>															
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
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center letras">Id</th>
									{{-- <th class="text-center letras">Empresa</th> --}}		
									<th class="text-center letras">Ejercicio</th>		
									<th class="text-center letras">Periodo</th>				
									<th class="text-center letras">Concepto</th>
									<th class="text-center letras">Importe pesos</th>
									<th class="text-center letras">Importe dolares</th>
									<th class="text-center letras">Status</th>
									<th class="text-center letras">Facturas</th>
									<th class="text-center letras">PDF informe</th>	
									<th class="text-center letras">Acciones</th>									
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
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center letras">Id</th>
									{{-- <th class="text-center letras">Empresa</th> --}}		
									<th class="text-center letras">Ejercicio</th>		
									<th class="text-center letras">Periodo</th>				
									<th class="text-center letras">Concepto</th>
									<th class="text-center letras">Importe pesos</th>
									<th class="text-center letras">Importe dolares</th>
									<th class="text-center letras">Status</th>
									<th class="text-center letras">Facturas</th>
									<th class="text-center letras">PDF informe</th>	
									<th class="text-center letras">Acciones</th>				
										
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
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center letras">Id</th>
									{{-- <th class="text-center letras">Empresa</th> --}}		
									<th class="text-center letras">Ejercicio</th>		
									<th class="text-center letras">Periodo</th>				
									<th class="text-center letras">Concepto</th>
									<th class="text-center letras">Importe pesos</th>
									<th class="text-center letras">Importe dolares</th>
									<th class="text-center letras">Status</th>
									<th class="text-center letras">Facturas</th>
									<th class="text-center letras">PDF informe</th>
									<th class="text-center letras">Acciones</th>					
										
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
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center letras">Id</th>
									{{-- <th class="text-center letras">Empresa</th> --}}		
									<th class="text-center letras">Ejercicio</th>		
									<th class="text-center letras">Periodo</th>				
									<th class="text-center letras">Concepto</th>
									<th class="text-center letras">Importe pesos</th>
									<th class="text-center letras">Importe dolares</th>
									<th class="text-center letras">Status</th>
									<th class="text-center letras">Facturas</th>
									<th class="text-center letras">PDF informe</th>	
									<th class="text-center letras">Acciones</th>				
										
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
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center letras">Id</th>
									{{-- <th class="text-center letras">Empresa</th> --}}		
									<th class="text-center letras">Ejercicio</th>		
									<th class="text-center letras">Periodo</th>				
									<th class="text-center letras">Concepto</th>
									<th class="text-center letras">Importe pesos</th>
									<th class="text-center letras">Importe dolares</th>
									<th class="text-center letras">Status</th>
									<th class="text-center letras">Facturas</th>
									<th class="text-center letras">PDF informe</th>	
									<th class="text-center letras">Acciones</th>				
										
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
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center letras">Id</th>
									{{-- <th class="text-center letras">Empresa</th> --}}		
									<th class="text-center letras">Ejercicio</th>		
									<th class="text-center letras">Periodo</th>				
									<th class="text-center letras">Concepto</th>
									<th class="text-center letras">Importe pesos</th>
									<th class="text-center letras">Importe dolares</th>
									<th class="text-center letras">Status</th>
									<th class="text-center letras">Facturas</th>
									<th class="text-center letras">PDF informe</th>	
									<th class="text-center letras">Acciones</th>				
										
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
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center letras">Id</th>
									{{-- <th class="text-center letras">Empresa</th> --}}		
									<th class="text-center letras">Ejercicio</th>		
									<th class="text-center letras">Periodo</th>				
									<th class="text-center letras">Concepto</th>
									<th class="text-center letras">Importe pesos</th>
									<th class="text-center letras">Importe dolares</th>
									<th class="text-center letras">Status</th>
									<th class="text-center letras">Facturas</th>
									<th class="text-center letras">PDF informe</th>	
									<th class="text-center letras">Acciones</th>				
										
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
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center letras">Id</th>
									{{-- <th class="text-center letras">Empresa</th> --}}		
									<th class="text-center letras">Ejercicio</th>		
									<th class="text-center letras">Periodo</th>				
									<th class="text-center letras">Concepto</th>
									<th class="text-center letras">Importe pesos</th>
									<th class="text-center letras">Importe dolares</th>
									<th class="text-center letras">Status</th>
									<th class="text-center letras">Facturas</th>
									<th class="text-center letras">PDF informe</th>	
									<th class="text-center letras">Acciones</th>				
										
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
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center letras">Id</th>
									{{-- <th class="text-center letras">Empresa</th> --}}		
									<th class="text-center letras">Ejercicio</th>		
									<th class="text-center letras">Periodo</th>				
									<th class="text-center letras">Concepto</th>
									<th class="text-center letras">Importe pesos</th>
									<th class="text-center letras">Importe dolares</th>
									<th class="text-center letras">Status</th>
									<th class="text-center letras">Facturas</th>
									<th class="text-center letras">PDF informe</th>	
									<th class="text-center letras">Acciones</th>				
										
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
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center letras">Id</th>
									{{-- <th class="text-center letras">Empresa</th> --}}		
									<th class="text-center letras">Ejercicio</th>		
									<th class="text-center letras">Periodo</th>				
									<th class="text-center letras">Concepto</th>
									<th class="text-center letras">Importe pesos</th>
									<th class="text-center letras">Importe dolares</th>
									<th class="text-center letras">Status</th>
									<th class="text-center letras">Facturas</th>
									<th class="text-center letras">PDF informe</th>	
									<th class="text-center letras">Acciones</th>				
										
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


