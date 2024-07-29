<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Modelos de Evaluación') }}
        </h2>
    </x-slot>
<div class="container mt-5">
    <h1>Modelos de Evaluación</h1>
    <a href="{{ route('modelo_evaluacion.create') }}" class="btn btn-primary">Crear Modelo</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Programa</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($modelos as $modelo)
                <tr>
                    <td>{{ $modelo->id_modelo }}</td>
                    <td>{{ $modelo->programa->nombre_programa }}</td>
                    <td>{{ $modelo->fecha_inicio }}</td>
                    <td>{{ $modelo->fecha_fin }}</td>
                    <td>
                        <a href="{{ route('modelo_evaluacion.show', $modelo->id_modelo) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('modelo_evaluacion.edit', $modelo->id_modelo) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('modelo_evaluacion.destroy', $modelo->id_modelo) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
