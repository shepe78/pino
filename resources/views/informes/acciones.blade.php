{!! Form::open(['route' => ['informes.destroy', $item->id], 'method' => 'delete']) !!}
<div class='btn-group'>   
    <a href="{{ route('informes.edit', $item->id) }}" title="Editar" '>
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