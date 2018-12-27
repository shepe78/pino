@extends('layouts.principal')

@section('content')
<div class="card card-primary card-outline col-12">
  <div class="card-header with-border">
    <h1 class="card-title">Listado de empresas</h1>
    <div class="card-tools pull-right">
      <div class="pull-right"><a href="empresas/create"><button class="btn" style="background-color: #039BE5"><i class="fas fa-plus"></i> Nuevo registro</button></a></div>	
      
    </div>
    @include('empresas.find')
  </div>
  <!-- /.box-header -->
  <div class="card-body">
    <table class="table table-bordered table-striped table-hover table-sm">
		<thead style="background-color: #039BE5">
			<th class="text-center text-white">Id</th>
				<th class="text-center text-white">Razón Social</th>
				<th class="text-center text-white">Tipo</th>
				<th class="text-center text-white">Domicilio</th>
				<th class="text-center text-white">Status</th>
				<th class="text-center text-white">Plaza</th>
				<th class="text-center text-white">Nombre corto</th>
				<th class="text-center text-white">Acciones</th>

		</thead>
		<span style="color: #039BE5">Total de registros: {{ $registros }}</span>
		<example-component></example-component>
		<tbody>
			@foreach($empresas as $item)
				<tr>
					<td>{{ $item->id }}</td>
					<td>{{ $item->razon_social }}</td>							
					<td class="text-center" style="background-color: #039BE5">
					@if ($item->tipo_empresa=='Facturadora')	
						<span class="fa text-white"> F</span></td>								
					@else
						<span class="fa text-white"> P</span></td>							
					@endif

					<td>{{ $item->domicilio }}</td>	
					
					<td class="text-center">

					@if ($item->status=='Activa')
						<span class="badge badge-success">{{ $item->status }}</td></span>
					@else
						<span class="badge badge-danger">{{ $item->status }}</span>
					@endif
					</td>
					<td>{{ $item->plaza->descripcion }}</td>
					<td>{{ $item->nombre_corto }}</td>
					

					<td style="text-align: center">
                      @include('empresas.acciones')                          
                  </td>
				</tr>
				@endforeach
		</tbody>
	</table>
  </div>
  <!-- /.box-body -->
  <div class="card-footer">
    <div class="text-center">{{ $empresas->appends(Request::only(['razon_social','tipo_empresa','plaza_id']))->render() }}</div>
  </div>
	
@endsection