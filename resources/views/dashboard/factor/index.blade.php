<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Factores') }}
        </h2>
    </x-slot>
<div class="container">
    <a href="{{ route('factor.create') }}" class="btn btn-primary mb-3">Crear Nuevo Factor</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Código</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($factores as $factor)
                <tr>
                    <td>{{ $factor->id_factor }}</td>
                    <td>{{ $factor->nombre_factor }}</td>
                    <td>{{ $factor->codigo_factor }}</td>
                    <td>
                        <a href="{{ route('factor.show', $factor->id_factor) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('factor.edit', $factor->id_factor) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('factor.destroy', $factor->id_factor) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>
