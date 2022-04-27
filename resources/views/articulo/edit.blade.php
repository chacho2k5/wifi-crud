@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h2>Editar artículos</h2>
@stop

@section('content')
    <form action="/articulos/{{ $articulo->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input type="text" id="codigo" name="codigo" class="form-control" value="{{ $articulo->codigo }}" tabindex="1" autofocus>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{ $articulo->descripcion }}" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="text" id="cantidad" name="cantidad" class="form-control" value="{{ $articulo->cantidad }}" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="text" id="precio" name="precio" class="form-control" value="{{ $articulo->precio }}" tabindex="4">
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">GRABAR</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
