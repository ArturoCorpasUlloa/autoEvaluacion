@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <h1 class="fw-bold text-secondary mb-4">Editar Origen Institucional</h1>
    <form action="{{ route('origenes.update', $origenInstitucional->id_origen) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre_origen" class="form-label">Nombre del Origen</label>
            <input type="text" class="form-control" id="nombre_origen" name="nombre_origen" value="{{ $origenInstitucional->nombre_origen }}" required>
        </div>
        <div class="mb-3">
            <label for="responsable" class="form-label">Responsable</label>
            <input type="text" class="form-control" id="responsable" name="responsable" value="{{ $origenInstitucional->responsable }}" required>
        </div>
        <div class="mb-3">
            <label for="correo_responsable" class="form-label">Correo del Responsable</label>
            <input type="email" class="form-control" id="correo_responsable" name="correo_responsable" value="{{ $origenInstitucional->correo_responsable }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('origenes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

@endsection
