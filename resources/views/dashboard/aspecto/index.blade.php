<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Aspectos') }}
        </h2>
    </x-slot>
<div class="container mt-5">
    <h1 class="text-center">Aspectos</h1>
    <a href="{{ route('aspecto.create') }}" class="btn btn-primary mb-3">Crear Aspecto</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Código</th>
                <th>Característica</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($aspectos as $aspecto)
                <tr>
                    <td>{{ $aspecto->id_aspecto }}</td>
                    <td>{{ $aspecto->nombre_aspecto }}</td>
                    <td>{{ $aspecto->codigo_aspecto }}</td>
                    <td>{{ $aspecto->caracteristica->nombre_caracteristica }}</td>
                    <td>
                        <a href="{{ route('aspecto.show', $aspecto->id_aspecto) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('aspecto.edit', $aspecto->id_aspecto) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('aspecto.destroy', $aspecto->id_aspecto) }}" method="POST" style="display:inline-block;">
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
</x-app-layout>
