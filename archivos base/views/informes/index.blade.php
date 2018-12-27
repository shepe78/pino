@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="card border-primary mb-12">
			<div class="card-header">				
				<div class="pull-left"><h1>Listado de Informes</h1></div>
				<div class="pull-right"><a href="informes/create"><button class="btn btn-primary">Nuevo registro</button></a></div>
				 				
			</div>

			<style>
            .letras {
                      color: #835223;
                      font-family: 'verdana';
                      font-weight: bold;
                      font-size: 15px;
                      
                  }
            .columna { width: 140px;

            }       
            </style>
			
			@include('informes.find')

			<div class="card-body text-dark">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<th class="text-center letras">Id</th>
						<th class="text-center letras">Empresa</th>
						<th class="text-center letras">Cliente</th>
						<th class="text-center letras">Ejercicio</th>						
						<th class="text-center letras">Periodo</th>						
						<th class="text-center letras">Concepto</th>
						<th class="text-center letras">Importe pesos</th>
						<th class="text-center letras">Importe dolares</th>
						<th class="text-center letras">Status</th>					
						<th class="text-center letras">Acciones</th>	
					</thead>
					<span class="letras">Total de registros: {{ $registros }}</span>
					
					<tbody>
						<tr>
						@foreach($informes as $item)
							<td>{{ $item->id }}</td>	
							<td>{{ $item->empresa->nombre_corto }}</td>
							<td>{{ $item->cliente->razon_social }}</td>	
							<td>{{ $item->ejercicio }}</td>	
							<td>{{ $item->periodo }}</td>	
							<td>{{ $item->concepto }}</td>
							<td class="text-right columna">$ &nbsp{{ number_format( $item->importe_pesos, 2, '.', ',' )}}</td>
							<td class="text-right columna">$ &nbsp{{ number_format( $item->importe_dolares, 2, '.', ',' )}}</td>
							
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
							
							<td style="text-align: center">
                              @include('informes.acciones')                          
                          </td>
						</tr>
						@endforeach
					</tbody>

				</table>
				 <div class="text-center">{{ $informes->render()}}</div>
			</div>
		</div>
	</div>	
@endsection