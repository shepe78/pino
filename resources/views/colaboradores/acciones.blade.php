{!! Form::open(['route' => ['colaboradores.destroy', $item->id], 'method' => 'delete']) !!}
<div class='btn-group'>
    {{-- <a href="{{ route('colaboradores.show', $item->id) }}" title="editar">
        <i class="btn btn-info fa fa-pencil"></i>
    </a> --}}
    <a href="{{ route('colaboradores.edit', $item->id) }}" title="editar" '>
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