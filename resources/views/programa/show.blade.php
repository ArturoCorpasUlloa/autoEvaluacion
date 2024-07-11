@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Detalles del Programa</h1>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $programa->id_programa }}</p>
            <p><strong>Nombre:</strong> {{ $programa->nombre_programa }}</p>
            <p><strong>Código:</strong> {{ $programa->codigo_programa }}</p>
            <p><strong>Nivel de Formación:</strong> {{ $programa->nivel_formacion }}</p>
        </div>
        <div class="card-footer text-right">
            <a href="{{ route('programas.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
