@extends('adminlte::page')

@section('title', 'CRUD - Laravel 9')

@section('content_header')
    <h2>Listado de Articulos</h2>
@stop

@section('content')
    <a href="articulos/create" class="btn btn-primary mb-3">CREAR</a>
    {{-- <table id="dt" class="table table-dark table-striped mt-4"> --}}
    <table id="dt" class="table table-striped table-bordered shadow-lg mt-1" style="width:100%">
        <thead class="bg-info text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Código</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            {{-- Esto lo eliminamos xq ahora los datos de obtienen via ajax --}}
            {{-- @foreach ($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->id }}</td>
                    <td>{{ $articulo->codigo }}</td>
                    <td>{{ $articulo->descripcion }}</td>
                    <td>{{ $articulo->cantidad }}</td>
                    <td>{{ $articulo->precio }}</td>
                    <td>
                        <form action="{{ route ('articulos.destroy', $articulo->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/articulos/{{ $articulo->id }}/edit" class="btn btn-info">Editar</a>
                            <button class="btn btn-danger">Borrar</button>
                    </form>
                    </td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/datatables.min.css"/>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    {{-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script> --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dt').DataTable({
                processing: true,
                responsive: true,
                // autoWidth: false,
                serverSide: true,
                dataType: json,
                // type: POST,
                ajax: "{{ route('articulos.index') }}",
                columns: [
                    {data: 'id'},
                    {data: 'codigo'},
                    {data: 'descripcion'},
                    {data: 'cantidad'},
                    {data: 'precio'},
                // {
                //     data: 'id',
                //     name: 'id'
                // },
                // {
                //     data: 'codigo',
                //     name: 'codigo'
                // },
                // {
                //     data: 'descripcion',
                //     name: 'descripcion'
                // },
                // {
                //     data: 'cantidad',
                //     name: 'cantidad'
                // },
                // {
                //     data: 'precio',
                //     name: 'precio',
                //     searchable: false,
                //     orderable: false
                // },
            ]
                // "language": {
                //     "lengthMenu": "Mostrar _MENU_ filas por página",
                //     "zeroRecords": "No se encontro información",
                //     "info": "Mostrando página _PAGE_ de _PAGES_",
                //     "infoEmpty": "No hay filas disponibles",
                //     "infoFiltered": "(filtered from _MAX_ total records)"
                // },
                // "lengthMenu": [[5,10,50,-1], [5,10,50,"All"]]
            });
        } );
    </script>
@stop
