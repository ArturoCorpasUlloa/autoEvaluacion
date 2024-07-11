@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="text-center">Lista de Docentes</h1>
        <a href="{{ route('docentes.create') }}" class="btn btn-primary">Nuevo Docente</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Programa</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($docentes as $docente)
                <tr>
                    <td>{{ $docente->id_profesor }}</td>
                    <td>{{ $docente->nombre_profesor }}</td>
                    <td>{{ $docente->correo_profesor }}</td>
                    <td>{{ $docente->programa->nombre_programa }}</td>
                    <td>
                        <a href="{{ route('docentes.show', $docente->id_profesor) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('docentes.edit', $docente->id_profesor) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('docentes.destroy', $docente->id_profesor) }}" method="POST" class="d-inline">
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

@endsection
