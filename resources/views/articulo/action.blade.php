{{-- <form action="{{ route('articulos.destroy', $id) }}" method="POST">
    @csrf --}}
    {{-- @method('DELETE') --}}
    {{-- <input name="_method" type="hidden" value="DELETE"> --}}
    <a href="{{ route('articulos.show', $id) }}" class="btn btn-outline-success btn-xs" data-toggle="tooltip" title='Ver'><i class="fas fa-eye"></i></a>
    <a href="{{ route('articulos.edit', $id) }}" class="btn btn-outline-primary btn-xs" data-toggle="tooltip" title='Editar'><i class="fas fa-edit"></i></a>
    {{-- <button type="submit" class="btn btn-outline-danger btn-xs show-alert-delete-box" data-toggle="tooltip" title='Borrar'><i class="fa fa-trash"></i></button> --}}

    <a href="javascript:void(0)" data-id="{{ $id }}" class="btn btn-outline-danger btn-xs" onclick="deletePost(event.target, {{ $id }})" data-toggle="tooltip" title='Borrar'><i class="fa fa-trash"></i></a>

    {{-- <a href="{{ route ('articulos.destroy', $id) }}" class="edit btn btn-danger btn-sm">Borrar</a> --}}
        {{-- <input  type="submit" name="submit" value="Borrar" class="btn btn-sm btn-danger"
            onclick="return confirm('Esta seguro de borrar? {{ $codigo }} ')"> --}}
    {{-- <button class="btn btn-danger btn-sm" type="submit"><i class="fal fa-trash-alt"></i></button> --}}
    {{-- <button type="submit" class="btn btn-outline-danger btn-xs" onclick="deleteConfirmation({{ $id }})"><i class="fa fa-trash"></i></button> --}}
    {{-- <button id="btn{{ $id }}" onclick="borrar({{ $id }})" type="submit" class="btn btn-outline-danger btn-xs" data-toggle="tooltip" title='Borrar'><i class="fa fa-trash"></i></button> --}}
    {{-- <button type="submit" class="btn btn-outline-danger btn-xs" data-toggle="tooltip" title='Borrar'><i class="fa fa-trash"></i></button> --}}
{{-- </form> --}}
