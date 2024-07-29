<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Programas') }}
        </h2>
    </x-slot>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        
        <a href="{{ route('programa.create') }}" class="btn btn-primary">Crear Programa</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Código</th>
                    <th>Nivel de Formación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($programas as $programa)
                    <tr>
                        <td>{{ $programa->id_programa }}</td>
                        <td>{{ $programa->nombre_programa }}</td>
                        <td>{{ $programa->codigo_programa }}</td>
                        <td>{{ $programa->nivel_formacion }}</td>
                        <td>
                            <a href="{{ route('programa.show', $programa->id_programa) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('programa.edit', $programa->id_programa) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('programa.destroy', $programa->id_programa) }}" method="POST" style="display:inline-block;">
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
</div>
</x-app-layout>
