@extends('layouts.app')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <h1 class="text-center">Aspectos</h1>
    <a href="{{ route('aspectos.create') }}" class="btn btn-primary mb-3">Crear Aspecto</a>
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
                        <a href="{{ route('aspectos.show', $aspecto->id_aspecto) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('aspectos.edit', $aspecto->id_aspecto) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('aspectos.destroy', $aspecto->id_aspecto) }}" method="POST" style="display:inline-block;">
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
@endsection
