<form action="{{ route('articulos.destroy', $id) }}" method="POST">
    @csrf
    @method('DELETE')

    <a href="{{ route('articulos.show', $id) }}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
    <a href="{{ route('articulos.edit', $id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
    {{-- <a href="{{ route ('articulos.destroy', $id) }}" class="edit btn btn-danger btn-sm">Borrar</a> --}}
        {{-- <input  type="submit" name="submit" value="Borrar" class="btn btn-sm btn-danger"
            onclick="return confirm('Esta seguro de borrar? {{ $codigo }} ')"> --}}
    {{-- <button class="btn btn-danger btn-sm" type="submit"><i class="fal fa-trash-alt"></i></button> --}}
    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Esta seguro de borrar? {{ $codigo }} ')"><i class="fa fa-trash"></i></button>
</form>
