@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Modelo de Evaluación</h1>
    <p><strong>ID:</strong> {{ $modeloEvaluacion->id_modelo }}</p>
    <p><strong>Programa:</strong> {{ $modeloEvaluacion->programa->nombre_programa }}</p>
    <p><strong>Fecha de Inicio:</strong> {{ $modeloEvaluacion->fecha_inicio }}</p>
    <p><strong>Fecha de Fin:</strong> {{ $modeloEvaluacion->fecha_fin }}</p>
    <a href="{{ route('modelos_evaluacion.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
