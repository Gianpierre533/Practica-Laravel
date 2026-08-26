@extends('layouts.crud')


@section('title', 'Nuevo Producto')

@section('content')
    <h1>Agregar Producto</h1>

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}">

        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" value="{{ old('precio') }}">

        <label>Stock:</label>
        <input type="number" name="stock" value="{{ old('stock') }}">

        <button type="submit" class="btn">Guardar</button>
    </form>

    <br>
    <a href="{{ route('productos.index') }}">Volver a la lista</a>
@endsection