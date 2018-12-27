@extends('layouts.principal')

@section('content')
<div class="card card-primary card-outline col-12">
  <div class="card-header with-border">
    <h2>Listado de clientes</h2>
    <div class="card-tools pull-right">
      <div class="pull-right"><a href="clientes/create"><button class="btn" style="background-color: #039BE5"><i class="fas fa-plus"></i> Nuevo registro</button></a></div>	
      
    </div>
    @include('clientes.find')
    <users></users>
  </div>
  <!-- /.box-header -->
  <div class="card-body">
    <table class="table table-bordered table-striped table-hover table-sm">
		<thead style="background-color: #039BE5">
			<th class="text-center text-white">Id</th>
			<th class="text-center text-white">Razon Social</th>			
			<th class="text-center text-white">Tipo</th>
			<th class="text-center text-white">Persona</th>
			<th class="text-center text-white">Status</th>
			<th class="text-center text-white">Plaza</th>
			<th class="text-center text-white">Promotor</th>
			<th class="text-center text-white">Analista</th>
			<th class="text-center text-white">Acciones</th>					
		</thead>
		<span style="color: #039BE5">Total de registros: {{ $registros }}</span>
		<example-component></example-component>
		<tbody>
			@foreach($clientes as $item)
				<tr>
					<td>{{ $item->id }}</td>
					<td>{{ $item->razon_social }}</td>							
					
					<td class="text-center" style="background-color: #039BE5">
					@if ($item->tipo_cliente=='Directo')	
						<span class="fa text-white">D</span></td>								
					@elseif($item->tipo_cliente=='Indirecto')
						<span class="fa text-white">I</span></td>							
					@elseif($item->tipo_cliente=='Prospecto')
				        <span class="fa text-white">P</span></td>
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
  <!-- /.box-body -->
  <div class="card-footer">
    <div class="text-center">{{ $clientes->appends(Request::only(['nombre']))->render() }}</div>
  </div>
	
@endsection