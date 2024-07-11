@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="fw-bold text-secondary">Lista de Orígenes Institucionales</h1>
        <a href="{{ route('origenes.create') }}" class="btn btn-primary">Nuevo Origen</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Responsable</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($origenes as $origen)
                <tr>
                    <td>{{ $origen->id_origen }}</td>
                    <td>{{ $origen->nombre_origen }}</td>
                    <td>{{ $origen->responsable }}</td>
                    <td>{{ $origen->correo_responsable }}</td>
                    <td>
                        <a href="{{ route('origenes.show', $origen->id_origen) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('origenes.edit', $origen->id_origen) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('origenes.destroy', $origen->id_origen) }}" method="POST" class="d-inline">
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
