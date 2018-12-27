{!! Form::open(['route' => ['plazas.destroy', $item->id], 'method' => 'delete']) !!}
<div class='btn-group'>
    {{-- <a href="{{ route('plazas.show', $item->id) }}" title="editar">
        <i class="btn btn-info fa fa-pencil"></i>
    </a> --}}
    <a href="{{ route('plazas.edit', $item->id) }}" title="editar" '>
        <i class="btn btn-xs fa fa-edit text-success"></i>
    </a>
    {!! Form::button('', [
        'type' => 'submit',
        'title'=> 'eliminar',
        'class'=> 'btn btx-xs fa fa-trash text-danger',
        'onclick' => "return confirm('Esta seguro de eliminar el registro?')"
    ]) !!}
</div>
{!! Form::close() !!}