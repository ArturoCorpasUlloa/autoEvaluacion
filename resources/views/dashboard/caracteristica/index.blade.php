<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Características') }}
        </h2>
    </x-slot>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        
        <a href="{{ route('caracteristica.create') }}" class="btn btn-primary">Crear Característica</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Código</th>
                    <th scope="col">Factor</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($caracteristicas as $caracteristica)
                <tr>
                    <td>{{ $caracteristica->id_caracteristica }}</td>
                    <td>{{ $caracteristica->nombre_caracteristica }}</td>
                    <td>{{ $caracteristica->codigo_caracteristica }}</td>
                    <td>{{ $caracteristica->factor->nombre_factor }}</td>
                    <td>
                        <a href="{{ route('caracteristica.show', $caracteristica->id_caracteristica) }}" class="btn btn-info btn-sm mr-1">Ver</a>
                        <a href="{{ route('caracteristica.edit', $caracteristica->id_caracteristica) }}" class="btn btn-warning btn-sm mr-1">Editar</a>
                        <form action="{{ route('caracteristica.destroy', $caracteristica->id_caracteristica) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>>
</x-app-layout>
