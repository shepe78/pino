@extends('layouts.principal')

@section('content')	
		<div class="card  card-primary card-outline col-12">
			<div class="card-header with-border">
    		<h2>Listado de Informes</h2>
    			<div class="card-tools pull-right">
      			<div class="pull-right"><a href="informes/create"><button class="btn" style="background-color: #039BE5"><i class="fas fa-plus"></i> Nuevo registro</button></a></div>	      
    			</div>
 		
			
			@include('informes.find')
		</div>	

			<div class="card-body">
				<table class="table table-bordered table-striped table-hover tabla-sm">
					<thead style="background-color:#039BE5" >
						<th class="text-center text-white">Id</th>
						<th class="text-center text-white">Empresa</th>
						<th class="text-center text-white">Cliente</th>
						<th class="text-center text-white">Ejercicio</th>						
						<th class="text-center text-white">Periodo</th>						
						<th class="text-center text-white">Concepto</th>
						<th class="text-center text-white">Importe pesos</th>
						<th class="text-center text-white">Importe dolares</th>
						<th class="text-center text-white">Status</th>					
						<th class="text-center text-white">Acciones</th>	
					</thead>
					<span class="text-info">Total de registros: {{ $registros }}</span>
					
					<tbody>
						<tr>
						@foreach($informes as $item)
							<td>{{ $item->id }}</td>	
							<td>{{ $item->empresa->nombre_corto }}</td>
							<td>{{ $item->cliente->razon_social }}</td>	
							<td>{{ $item->ejercicio }}</td>	
							<td>{{ $item->periodo }}</td>	
							<td>{{ str_limit( $item->concepto ,50) }}</td>
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
				  <div class="text-center">{{ $informes->appends(Request::only(['cliente_id','periodo','ejercicio']))->render() }}</div>
			</div>
		</div>
	
@endsection