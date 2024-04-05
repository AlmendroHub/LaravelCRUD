@extends('adminlte::page')

@section('title', 'Crear Artículo')

@section('content_header')
    <h2 class="text-success my-3"><u>Crear Artículo</u></h2>
@stop

@section('content')
    {{-- Formulario para crear el artículo --}}
<form action="/articulos" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Código</label>
        <input type="text" id="codigo" name="codigo" type="text" class="form-control" tabindex="1" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input type="text" id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input type="text" id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input type="text" id="precio" name="precio" type="text" class="form-control" tabindex="4" required>
    </div>
        {{-- Botones para cancelar o guardar el artículo --}}
        <a href="/articulos"  class="btn btn-secondary mt-2">Cancelar</a>
        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
@stop

@section('css')
    <link href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css" rel="stylesheet">
@stop

@section('js')
@stop