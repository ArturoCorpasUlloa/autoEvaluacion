@extends('layouts.app')

@section('title', 'Programas')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Programas</h1>
        <a href="{{ route('programas.create') }}" class="btn btn-primary">Crear Programa</a>
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
                            <a href="{{ route('programas.show', $programa->id_programa) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('programas.edit', $programa->id_programa) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('programas.destroy', $programa->id_programa) }}" method="POST" style="display:inline-block;">
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
