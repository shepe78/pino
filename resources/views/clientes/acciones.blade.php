{!! Form::open(['route' => ['clientes.destroy', $item->id], 'method' => 'delete']) !!}
<div class='btn-group'>
     <a href="{{ route('clientes.show', $item->id) }}" title="detalles">
        <i class="fas fa-search text-primary"></i>
    </a>
    &nbsp &nbsp
    <a href="{{ route('clientes.edit', $item->id) }}" title="editar" '>
        <i class="fa fa-edit text-success"></i>
    </a>
    {!! Form::button('', [
        'type' => 'submit',
        'title'=> 'eliminar',
        'class'=> 'fa fa-trash text-danger',
        'style'=> 'border:none; background:none; cursor:hand;',
        'onclick' => "return confirm('Esta seguro de eliminar el registro?')"
    ]) !!}
   
</div>
{!! Form::close() !!}