@extends('layouts.app')

@section('content')
    <h1>Crear Modelo de Evaluación</h1>
    <form action="{{ route('modelos_evaluacion.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_programa">Programa</label>
            <select class="form-control" id="id_programa" name="id_programa" required>
                @foreach ($programas as $programa)
                    <option value="{{ $programa->id_programa }}">{{ $programa->nombre_programa }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_inicio">Fecha de Inicio</label>
            <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
        </div>
        <div class="form-group">
            <label for="fecha_fin">Fecha de Fin</label>
            <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
