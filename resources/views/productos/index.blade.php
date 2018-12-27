@extends('layouts.principal')

@section('content')
<div class="card card-primary card-outline col-12">
  <div class="card-header with-border">
    <h1 class="card-title">Listado de productos</h1>
    <div class="card-tools pull-right">
      <div class="pull-right"><a href="productos/create"><button class="btn" style="background-color: #039BE5"><i class="fas fa-plus"></i> Nuevo registro</button></a></div>	
      
    </div>
    @include('productos.find')
  </div>
  <!-- /.box-header -->
  <div class="card-body">
    <table class="table table-bordered table-striped table-hover table-sm">
		<thead style="background-color: #039BE5">
			<th class="text-center text-white">Id</th>
			<th class="text-center text-white">Codigo</th>
			<th class="text-center text-white">Descripción</th>
			<th class="text-center text-white">Acciones</th>	
		</thead>
		<span style="color: #039BE5">Total de registros: {{ $registros }}</span>
		<example-component></example-component>
		<tbody>
			@foreach($productos as $item)
			<tr>
				<td>{{ $item->id }}</td>
				<td>{{ $item->codigo }}</td>
				<td>{{ $item->descripcion }}</td>

				<td style="text-align: center">
                  @include('productos.acciones')                          
              </td>
			</tr>
			@endforeach
		</tbody>
	</table>
  </div>
  <!-- /.box-body -->
  <div class="card-footer">
    <div class="text-center">{{ $productos->render()}}</div>
  </div>
	
@endsection