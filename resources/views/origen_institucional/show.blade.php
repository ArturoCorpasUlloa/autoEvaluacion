@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"

<div class="container mt-5">
    <h1 class="fw-bold text-secondary mb-4">Detalles del Origen Institucional</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nombre: {{ $origenInstitucional->nombre_origen }}</h5>
            <p class="card-text">Responsable: {{ $origenInstitucional->responsable }}</p>
            <p class="card-text">Correo: {{ $origenInstitucional->correo_responsable }}</p>
            <a href="{{ route('origenes.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

@endsection
