@extends('adminlte::page')

@section('title', 'Laravel CRUD')

@section('content_header')
    <h1 class="bg-primary text-white text-center py-2 ">Laravel CRUD + Bootstrap + Jetstream  + Blade</h1>
@stop

@section('content')
    {{-- Botón para crear artículos --}}
<a href="articulos/create" class="btn btn-success mb-2">CREAR</a>

{{-- Tabla de artículos --}}
<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4 text-center">
    <thead class="table-primary">
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
        {{-- Recorremos y mostramos cada artículo de la base de datos --}}
        @foreach ($articulos as $articulo)
            <tr>
                <td>{{ $articulo->id }}</td>
                <td>{{ $articulo->codigo }}</td>
                <td>{{ $articulo->descripcion }}</td>
                <td>{{ $articulo->cantidad }}</td>
                <td>{{ $articulo->precio }}</td>
                <td>
                    {{-- Botones para editar y borrar los artículos --}}
                    <form action="{{ route ('articulos.destroy',$articulo->id)}}" method="POST">
                        <a href="/articulos/{{ $articulo->id }}/edit" class="btn  btn-warning">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>

<script>
$(document).ready(function(){
    $('#articulos').DataTable();
});
</script>

@stop