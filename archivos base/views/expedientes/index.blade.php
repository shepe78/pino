@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="card border-primary mb-12">
			<div class="card-header">				
				<div class="pull-left"><h1>Listado de Expedientes</h1></div>
				<div class="pull-right"><a href="expedientes/create"><button class="btn btn-primary">Nuevo registro</button></a></div>
				 				
			</div>

			<style>
            .letras {
                      color: #835223;
                      font-family: 'verdana';
                      font-weight: bold;
                      font-size: 15px;
                      
                  } 
            </style>

			{{-- @include('expedientes.find') --}}
			<div class="card-body text-dark">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<th class="text-center letras">Id_exp</th>
						<th class="text-center letras">id_cliente</th>
						<th class="text-center letras">Cliente</th>											
						<th class="text-center letras">Acciones</th>	
					</thead>
					<span class="letras">Total de registros: {{ $registros }}</span>
					
					<tbody>
						<tr>
						@foreach($expedientes as $item)
							<td>{{ $item->id }}</td>	
							<td>{{ $item->id_cliente }}</td>
							<td>{{ $item->razon_social }}</td>
							
							
							<td style="text-align: center">
                              @include('expedientes.acciones')                          
                          </td>
						</tr>
						@endforeach
					</tbody>

				</table>
				 
			</div>
		</div>
	</div>	
@endsection