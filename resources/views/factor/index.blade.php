@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Factores</h1>
    <a href="{{ route('factores.create') }}" class="btn btn-primary mb-3">Crear Nuevo Factor</a>
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
                        <a href="{{ route('factores.show', $factor->id_factor) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('factores.edit', $factor->id_factor) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('factores.destroy', $factor->id_factor) }}" method="POST" class="d-inline">
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
@endsection
