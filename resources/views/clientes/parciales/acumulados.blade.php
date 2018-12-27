<div class="container-fluid">
    <div class="card mb-12">
        <div class="card-body text-dark">
        	<h3 class="text-info">{{ $cliente->razon_social }}</h3>
            <ul class="nav nav-pills">               
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Conceptos">Acumulado por Conceptos</a>
                  </li>  
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Empresas">Acumulado por Empresas</a>
                  </li>         
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Ejercicios">Acumulado por Empresas y Ejercicios</a>
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
			            .aljez {color:#323e51;}
			            .ingenia {color:#0679e5;}
			            .ave {color:#107232;}
			            .busness {color:#1bc16e;}
			            .enter {color:#17a4ef;}
			            .consorcio {color:##3d7999;}
			            .su {color:#672568;}
			            .apo {color:#f29b04;}
			            .centro {color:#1123ad;}
			            .dyc {color:#0a5b91;}
			            .daikon {color:#961b3e;}
			            .lv {color:#7a3211;}
			            


		        </style>                  
                <div class="tab-pane fade" id="Conceptos">
						<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center letras">Concepto</th>
									<th class="text-center letras">Importe en Pesos</th>
									<th class="text-center letras">Importe en Dolares</th>											
										
								</thead>								
								<tbody>
									<tr>
									@foreach($informe_conceptos as $item)
										<td>{{ $item->concepto }}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>	
																														
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>											                               
                </div>


                <div class="tab-pane fade" id="Empresas">
						<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center letras">Empresa</th>
									<th class="text-center letras">Importe en Pesos</th>
									<th class="text-center letras">Importe en Dolares</th>											
										
								</thead>								
								<tbody>

									<tr>
									@foreach($informe_empresas as $item)
										@switch($item->empresa_id)
										@case (41)
										<td class="aljez">{{ $item->facturadora }}</td>
										<td class="text-right aljez">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right aljez">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (23)
										<td class="ingenia">{{ $item->facturadora }}</td>
										<td class="text-right ingenia">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right ingenia">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (22)
										<td class="daikon">{{ $item->facturadora }}</td>
										<td class="text-right daikon">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right daikon">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (20)
										<td class="dyc">{{ $item->facturadora }}</td>
										<td class="text-right dyc">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right dyc">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (1)
										<td class="centro">{{ $item->facturadora }}</td>
										<td class="text-right centro">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right centro">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (6)
										<td class="enter">{{ $item->facturadora }}</td>
										<td class="text-right enter">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right enter">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (42)
										<td class="busness">{{ $item->facturadora }}</td>
										<td class="text-right busness">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right busness">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (13)
										<td class="ave">{{ $item->facturadora }}</td>
										<td class="text-right ave">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right ave">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (43)
										<td class="su">{{ $item->facturadora }}</td>
										<td class="text-right su">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right su">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (12)
										<td class="apo">{{ $item->facturadora }}</td>
										<td class="text-right apo">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right apo">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break
										
										@case (21)
										<td class="lv">{{ $item->facturadora }}</td>
										<td class="text-right lv">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right lv">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (40)
										<td class="consorcio">{{ $item->facturadora }}</td>
										<td class="text-right consorcio">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right consorcio">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break
										@endswitch	
																														
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>											                               
                </div>

                <div class="tab-pane fade" id="Ejercicios">
						<div class="card-body text-dark">
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<th class="text-center letras">Empresa</th>
									<th class="text-center letras">Ejercicio</th>
									<th class="text-center letras">Importe en Pesos</th>
									<th class="text-center letras">Importe en Dolares</th>											
										
								</thead>								
								<tbody>

									<tr>
									@foreach($informe_ejercicios as $item)
										@switch($item->empresa_id)
										@case (41)
										<td class="aljez">{{ $item->facturadora }}</td>
										<td class="aljez">{{ $item->ejercicio }}</td>
										<td class="text-right aljez">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right aljez">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (23)
										<td class="ingenia">{{ $item->facturadora }}</td>
										<td class="ingenia">{{ $item->ejercicio }}</td>
										<td class="text-right ingenia">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right ingenia">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (22)
										<td class="daikon">{{ $item->facturadora }}</td>
										<td class="daikon">{{ $item->ejercicio }}</td>
										<td class="text-right daikon">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right daikon">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (20)
										<td class="dyc">{{ $item->facturadora }}</td>
										<td class="dyc">{{ $item->ejercicio }}</td>
										<td class="text-right dyc">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right dyc">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (1)
										<td class="centro">{{ $item->facturadora }}</td>
										<td class="centro">{{ $item->ejercicio }}</td>
										<td class="text-right centro">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right centro">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (6)
										<td class="enter">{{ $item->facturadora }}</td>
										<td class="enter">{{ $item->ejercicio }}</td>
										<td class="text-right enter">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right enter">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (42)
										<td class="busness">{{ $item->facturadora }}</td>
										<td class="busness">{{ $item->ejercicio }}</td>
										<td class="text-right busness">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right busness">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (13)
										<td class="ave">{{ $item->facturadora }}</td>
										<td class="ave">{{ $item->ejercicio }}</td>
										<td class="text-right ave">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right ave">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (43)
										<td class="su">{{ $item->facturadora }}</td>
										<td class="su">{{ $item->ejercicio }}</td>
										<td class="text-right su">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right su">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (12)
										<td class="apo">{{ $item->facturadora }}</td>
										<td class="apo">{{ $item->ejercicio }}</td>
										<td class="text-right apo">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right apo">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break
										
										@case (21)
										<td class="lv">{{ $item->facturadora }}</td>
										<td class="lv">{{ $item->ejercicio }}</td>
										<td class="text-right lv">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right lv">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break

										@case (40)
										<td class="consorcio">{{ $item->facturadora }}</td>
										<td class="consorcio">{{ $item->ejercicio }}</td>
										<td class="text-right consorcio">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
										<td class="text-right consorcio">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>

										@break
										@endswitch	
																														
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

