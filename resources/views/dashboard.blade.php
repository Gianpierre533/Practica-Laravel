<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">Mis Productos</h3>
                    <a href="{{ route('productos.create') }}" class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700">
                        Agregar producto
                    </a>
                </div>

                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-2 border">Nombre</th>
                            <th class="p-2 border">Precio</th>
                            <th class="p-2 border">Stock</th>
                            <th class="p-2 border">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($productos as $producto)
                            <tr>
                                <td class="p-2 border">{{ $producto->nombre }}</td>
                                <td class="p-2 border">{{ $producto->precio }}</td>
                                <td class="p-2 border">{{ $producto->stock }}</td>
                                <td class="p-2 border">
                                    <a href="{{ route('productos.edit', $producto->id) }}" class="text-blue-600 hover:underline">Editar</a>

                                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('¿Eliminar este producto?')" class="text-red-600 hover:underline ml-2">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="p-2 border text-center text-gray-500">No hay productos registrados.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>