@extends('layouts.app')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <h1 class="text-center">Detalles del Aspecto</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $aspecto->id_aspecto }}</p>
            <p><strong>Nombre:</strong> {{ $aspecto->nombre_aspecto }}</p>
            <p><strong>Código:</strong> {{ $aspecto->codigo_aspecto }}</p>
            <p><strong>Característica:</strong> {{ $aspecto->caracteristica->nombre_caracteristica }}</p>
            <a href="{{ route('aspectos.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection
