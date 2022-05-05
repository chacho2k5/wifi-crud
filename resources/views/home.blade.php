@extends('adminlte::page')

@section('title', 'WIFI')

@section('content_header')
    <h1>WIFI AULAS</h1>
@stop

{{-- Esto se puede configurar global desde adminlte.php --}}
{{-- @section('plugins.Datatables', true) --}}
{{-- @section('plugins.Select2', true) --}}
{{-- @section('plugins.Sweetalert2', true) --}}

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    {{-- <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'> --}}
@stop

@section('content')
<div class="card">
    {{-- <div class="card-header">
      Featured
    </div> --}}
    <div class="card-body">
        <table id="dt" class="table">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Docente</th>
                    <th>Módulo</th>
                    <th>Aula</th>
                    <th>Conexión</th>
                    <th>Clave</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">10 Abril</td>
                    <td>docente</td>
                    <td>modulo</td>
                    <td>aula</td>
                    <td>conexion</td>
                    <td>la clave</td>
                </tr>
                <tr>
                    <td scope="row">10 Abril</td>
                    <td>docente</td>
                    <td>modulo</td>
                    <td>aula</td>
                    <td>conexion</td>
                    <td>la clave</td>
                </tr>
            </tbody>
        </table>

    </div>
  </div>
    <select class="select01">
        <option value="one">First</option>
        <option value="two" disabled="disabled">Second (disabled)</option>
        <option value="three">Third</option>
      </select>
@stop

@section('js')
    {{-- Datatable --}}
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script> --}}
    {{-- Fin Datatable --}}
    <script>
        $(document).ready(function() {
            $('#dt').DataTable({
                responsive: true,
                autoWidth: false,
                "language": {
                   "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                //    "url": "/public/vendor/datatables/i18n/Spanish.json"
                }
            });
        } );

        Swal.fire(
  'Websolutionstuff!',
  'Button Clicked',
  'success'
)
</script>
@stop
