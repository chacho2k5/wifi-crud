@extends('adminlte::page')

@section('title', 'CRUD - Laravel 9')

@section('content_header')
    <h2>CRUD Personal</h2>
@stop

@section('css')
    @include('components.datatable-css')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" class="rel">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" class="rel">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css" class="rel"> --}}
@stop

@section('content')
    <div class="card">
        {{-- <div class="card-header">
        Lista de Personal
        </div> --}}
        <div class="card-body">
            <table id="tblPersonal" class="table table-hover">
                <thead>
                    <tr>
                        <th>Legajo</th>
                        <th>Apellido</th>
                        <th>Nombres</th>
                        <th>CUIL</th>
                        <th>Correo</th>
                        <th>Celular</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personal as $persona)
                        <tr>
                            <td> {{ $persona->legajo }}</td>
                            <td> {{ $persona->apellido }}</td>
                            <td> {{ $persona->nombres }}</td>
                            <td> {{ $persona->cuil }}</td>
                            <td> {{ $persona->correo }}</td>
                            <td> {{ $persona->celular }}</td>
                            <td> {{ $persona->categoria }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
    @include('components.datatable-js')
    {{-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.js"></script> --}}

    <script>
        $(document).ready( function () {
            $('#tblPersonal').DataTable({
                responsive: true,
                autoWidth: false,
                select: {
                    style: 'single'
                }
            });
        } );
    </script>
@stop
