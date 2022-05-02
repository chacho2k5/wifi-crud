@extends('adminlte::page')

@section('title', 'CRUD - Laravel 9')

@section('content_header')
    <h2>Listado de Articulos</h2>
@stop

@section('css')
    <style>
        /* table th {
            background-color: #0c375f !important;
            color: white
        }
        table>tbody>tr>td {
            vertical-align: middle !important;
        } */
        .btn-group, .btn-group-vertical {
          position:absolute !important
        }
    </style>
    <link rel="stylesheet" href="/css/admin_custom.css">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/datatables.min.css"/> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fc-4.0.2/fh-3.2.2/r-2.2.9/sc-2.0.5/sb-1.3.2/sl-1.3.4/datatables.min.css"/>
@stop

@section('content')
    {{-- <table id="dt" class="table table-dark table-striped mt-4"> --}}
    <a href="articulos/create" class="btn btn-primary mb-3">CREAR</a>
    <div class="card">
        {{-- <div class="card-header">
            <a href="articulos/create" class="btn btn-primary mb-3">CREAR</a>
        </div> --}}
        <div class="card-body">
            {{-- <table id="dt" class="table table-striped table-bordered shadow-lg mt-1" style="width:100%"> --}}
            {{-- <table id="dt" class="table table-striped" style="width:100%"> --}}
                <table id="dt" class="table table-striped">
                {{-- <table id="dt" class="table table-dark table-hover"> --}}
                <thead class="bg-primary text-black">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Código</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                        <th scope="col" width="110px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                {{-- <tfoot>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Código</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                        <th scope="col" width="110px">Acciones</th>
                    </tr>
                </tfoot> --}}
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
            </table>
        </div>
    </div>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    {{-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script> --}}

    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/datatables.min.js"></script>
    <script type="text/javascript" src="dataTables.scrollingPagination.js"></script> --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fc-4.0.2/fh-3.2.2/r-2.2.9/sc-2.0.5/sb-1.3.2/sl-1.3.4/datatables.min.js"></script>
    <script>
        // Este function capaz q ni hace falta #chacho
        $(function() {
            // Setting defaults
            $.extend( $.fn.dataTable.defaults, {
                searching: true,
                ordering:  true,
                // "language": {
                //    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                // }
                "language": {
                    "info": "_TOTAL_ registros",
                    "search": "Buscar",
                    "paginate": {
                        "next": "Sig.",
                        "previous": "Ant.",
                        "first": "Primero",
                        "last": "Último"
                    },
                    "lengthMenu": 'Mostrar <select>'+
                        '<option value="10">10</option>'+
                        '<option value="30">30</option>'+
                        '<option value="-1">Todos</option>'+
                        '</select> registros',
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "emptyTable": "No hay datos",
                    "zeroRecords": "No hay conincidencias",
                    "infoEmpty": "",
                    "infoFiltered": ""
                }

            } );
        });

        $(document).ready(function() {
            $('#dt').DataTable({
                "processing": true,
                "responsive": true,
                "autoWidth": false,
                "serverSide": true,
                "buttons":[
                    {
                        extend: 'excelHtml5',
                        text:   '<i class="fas fa-file-excel">',
                        titleAttr: 'Exportar a Excel',
                        className: 'btn btn-success'
                    },
                    {
                        // extend: 'pdfHtml5',
                        extend: 'pdf',
                        text:   '<i class="fas fa-file-pdf">',
                        titleAttr: 'Exportar a PDF',
                        className: 'btn btn-danger'
                    },
                    {
                        extend: 'print',
                        text:   '<i class="fa fa-print">',
                        titleAttr: 'Imprimir',
                        className: 'btn btn-info'
                    }
                ],
                // "dataType": json,
                // type: POST,
                "ajax": "{{ route('dt.articulos') }}",
                "columns": [
                //     {data: 'id'},
                //     {data: 'codigo'},
                //     {data: 'descripcion'},
                //     {data: 'cantidad'},
                //     {data: 'precio'},
                {
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'codigo',
                    name: 'codigo'
                },
                {
                    data: 'descripcion',
                    name: 'descripcion'
                },
                {
                    data: 'cantidad',
                    name: 'cantidad'
                },
                {
                    data: 'precio',
                    name: 'precio',
                    searchable: false,
                    orderable: false
                },
                {
                    data: 'actions',
                    name: 'actions',
                    searchable: false,
                    orderable: false
                },
            ],
                order: [[2, 'asc']
            ],
                // "fixedHeader": true,
                "pageLength": 30,
                // "scrollX": true
                // "scrollY": "300px",
                "scrollY": '45vh',
                "scrollCollapse": true,
                // "paging": false,
                "pagingType": "full_numbers",
                // "dom": 'Bfrtilp',
                // "dom": '<"top"f>rt<"bottom"ip><"clear">'
                // "dom": '<"top"Bf>rt<"bottom"p><"clear">'
                // "dom": '<"top"Bf><"toolbar">rt<"bottom"p><"clear">'
                // "dom": '<"toolbar">Bfrt<"bottom"p><"clear">'
                "dom": '<"top"Bf>rt<"bottom"p><"clear">'
                // "dom": '<Bf<t>ip>'
                // "dom": '<"wrapper"flipt>'

                // "language": {
                //     "lengthMenu": "Mostrar _MENU_ filas por página",
                //     "zeroRecords": "No se encontro información",
                //     "info": "Mostrando página _PAGE_ de _PAGES_",
                //     "infoEmpty": "No hay filas disponibles",
                //     "infoFiltered": "(filtered from _MAX_ total records)"
                // },
                // "lengthMenu": [[5,10,50,-1], [5,10,50,"All"]]
            });
            // $("div.toolbar").html('<b>Custom tool bar! Text/images etc.</b>');
        } );
    </script>
@stop
