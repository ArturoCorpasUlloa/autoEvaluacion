@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Modelo de Evaluación</h1>
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_programa">Programa</label>
            <select class="form-control" id="id_programa" name="id_programa" required>
                @foreach ($programas as $programa)
                <option value="{{ $programa->id_programa }}" @if($modeloEvaluacion->id_programa == $programa->id_programa) selected @endif>{{ $programa->nombre_programa }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_inicio">Fecha de Inicio</label>
            <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{ $modeloEvaluacion->fecha_inicio }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_fin">Fecha de Fin</label>
            <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="{{ $modeloEvaluacion->fecha_fin }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
