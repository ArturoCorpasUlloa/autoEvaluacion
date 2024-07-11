@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <h1 class="text-center mb-4">Editar Docente</h1>
    <form action="{{ route('docentes.update', $docente->id_profesor) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre_profesor" class="form-label">Nombre del Profesor</label>
            <input type="text" class="form-control" id="nombre_profesor" name="nombre_profesor" value="{{ $docente->nombre_profesor }}">
        </div>
        <div class="mb-3">
            <label for="correo_profesor" class="form-label">Correo del Profesor</label>
            <input type="email" class="form-control" id="correo_profesor" name="correo_profesor" value="{{ $docente->correo_profesor }}">
        </div>
        <div class="mb-3">
            <label for="id_programa" class="form-label">Programa</label>
            <select class="form-control" id="id_programa" name="id_programa">
                @foreach($programas as $programa)
                    <option value="{{ $programa->id_programa }}" {{ $docente->id_programa == $programa->id_programa ? 'selected' : '' }}>{{ $programa->nombre_programa }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('docentes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>


@endsection
