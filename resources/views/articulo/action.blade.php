<form action="{{ route('articulos.destroy', $id) }}" method="POST">
    @csrf
    @method('DELETE')

    <a href="{{ route('articulos.show', $id) }}" class="btn btn-outline-success btn-xs"><i class="fas fa-eye" data-toggle="tooltip" title='Ver'></i></a>
    <a href="{{ route('articulos.edit', $id) }}" class="btn btn-outline-primary btn-xs"><i class="fas fa-edit" data-toggle="tooltip" title='Editar'></i></a>
    {{-- <a href="{{ route ('articulos.destroy', $id) }}" class="edit btn btn-danger btn-sm">Borrar</a> --}}
        {{-- <input  type="submit" name="submit" value="Borrar" class="btn btn-sm btn-danger"
            onclick="return confirm('Esta seguro de borrar? {{ $codigo }} ')"> --}}
    {{-- <button class="btn btn-danger btn-sm" type="submit"><i class="fal fa-trash-alt"></i></button> --}}
    {{-- <button type="submit" class="btn btn-outline-danger btn-xs" onclick="deleteConfirmation({{ $id }})"><i class="fa fa-trash"></i></button> --}}
    <button type="submit" class="btn btn-outline-danger btn-xs" data-toggle="tooltip" title='Borrar' onclick="borrar_registro(event)"><i class="fa fa-trash"></i></button>
    {{-- <button type="submit" class="btn btn-outline-danger btn-xs" data-toggle="tooltip" title='Borrar'><i class="fa fa-trash"></i></button> --}}
</form>
