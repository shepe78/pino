@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="card border-primary mb-12">
			<div class="card-header">				
				<div class="pull-left"><h1>Listado de Facturas</h1></div>
				<div class="pull-right"><a href="facturas/create"><button class="btn btn-primary">Nuevo registro</button></a></div>
				 				
			</div>

			<style>
            .letras {
                      color: #835223;
                      font-family: 'verdana';
                      font-weight: bold;
                      font-size: 15px;
                      
                  } 
            </style>

			{{-- @include('facturas.find') --}}
			<div class="card-body text-dark">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<th class="text-center letras">Id</th>
						<th class="text-center letras">Empresa</th>												
						<th class="text-center letras">Serie</th>						
						<th class="text-center letras">Folio</th>
						<th class="text-center letras">Fecha</th>
						<th class="text-center letras">Cliente</th>
						<th class="text-center letras">Concepto</th>
						<th class="text-center letras">Clave SAT</th>
						<th class="text-center letras">Importe</th>						
						<th class="text-center letras">Status</th>					
						<th class="text-center letras">Acciones</th>	
					</thead>
					<span class="letras">Total de registros: {{ $registros }}</span>
					
					<tbody>
						<tr>
						@foreach($facturas as $item)
							<td>{{ $item->id }}</td>	
							<td>{{ $item->empresa->razon_social }}</td>
							<td>{{ $item->serie }}</td>	
							<td>{{ $item->folio }}</td>
							<td>{{ date('d-m-Y',strtotime ($item->fecha)) }}</td>
							<td>{{ $item->cliente->razon_social }}</td>							
							<td>{{ $item->concepto }}</td>
							<td>{{ $item->clave_sat }}</td>
							<td class="text-right">$ &nbsp{{ number_format( $item->importe, 2, '.', ',' )}}</td>
														
							<td class="text-center">
							@if ($item->status=='Vigente')
								<span class="badge badge-success">{{ $item->status }}</td></span>
							@else
								<span class="badge badge-danger">{{ $item->status }}</span>
							@endif
							</td>
							
							<td style="text-align: center">
                              @include('facturas.acciones')                          
                          </td>
						</tr>
						@endforeach
					</tbody>

				</table>
				 <div class="text-center">{{ $facturas->render()}}</div>
			</div>
		</div>
	</div>	
@endsection