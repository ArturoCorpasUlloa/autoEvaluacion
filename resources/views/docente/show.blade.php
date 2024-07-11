@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <h1 class="text-center mb-4">Detalles del Docente</h1>
    <div class="card">
        <div class="card-body">
            <p class="fw-bold text-secondary">Nombre: {{ $docente->nombre_profesor }}</p>
            <p class="fw-bold text-secondary">Correo: {{ $docente->correo_profesor }}</p>
            <p class="fw-bold text-secondary">Programa: {{ $docente->programa->nombre_programa }}</p>
            <a href="{{ route('docentes.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

@endsection
