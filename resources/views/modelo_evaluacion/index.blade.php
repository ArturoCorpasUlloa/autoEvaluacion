@extends('layouts.app')

@section('content')
    <h1>Modelos de Evaluación</h1>
    <a href="{{ route('modelos_evaluacion.create') }}" class="btn btn-primary">Crear Modelo</a>
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
                        <a href="{{ route('modelos_evaluacion.show', $modelo->id_modelo) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('modelos_evaluacion.edit', $modelo->id_modelo) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('modelos_evaluacion.destroy', $modelo->id_modelo) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
