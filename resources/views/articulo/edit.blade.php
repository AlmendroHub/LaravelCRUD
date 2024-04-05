@extends('adminlte::page')

@section('title', 'Editar Artículo')

@section('content_header')
    <h2 class="text-warning my-3"><u>Editar Artículo</u></h2>
@stop

@section('content')
<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Código</label>
        <input type="text" id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input type="text" id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input type="text" id="cantidad" name="cantidad" type="number" class="form-control" value="{{$articulo->cantidad}}" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input type="text" id="precio" name="precio" type="text" class="form-control" value="{{$articulo->precio}}" required>
    </div>
        {{-- Botones para cancelar o guardar el artículo --}}
        <a href="/articulos"  class="btn btn-secondary mt-2">Cancelar</a>
        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
@stop

@section('css')
<link href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css" rel="stylesheet">
@endsection

@section('js')
@stop