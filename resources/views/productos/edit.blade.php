@extends('layouts.crud')

@section('title', 'Editar Producto')

@section('content')
    <h1>Editar Producto</h1>

    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre', $producto->nombre) }}">

        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" value="{{ old('precio', $producto->precio) }}">

        <label>Stock:</label>
        <input type="number" name="stock" value="{{ old('stock', $producto->stock) }}">

        <button type="submit" class="btn">Actualizar</button>
    </form>

    <br>
    <a href="{{ route('productos.index') }}">Volver a la lista</a>
@endsection