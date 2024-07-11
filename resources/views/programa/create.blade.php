@extends('layouts.app')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Crear Programa</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('programas.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre_programa">Nombre del Programa</label>
                    <input type="text" class="form-control" id="nombre_programa" name="nombre_programa" required>
                </div>
                <div class="form-group">
                    <label for="codigo_programa">Código del Programa</label>
                    <input type="text" class="form-control" id="codigo_programa" name="codigo_programa" required>
                </div>
                <div class="form-group">
                    <label for="nivel_formacion">Nivel de Formación</label>
                    <input type="text" class="form-control" id="nivel_formacion" name="nivel_formacion" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
