@extends('layouts.app')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Crear Característica</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('caracteristicas.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre_caracteristica">Nombre de la Característica</label>
                    <input type="text" class="form-control" id="nombre_caracteristica" name="nombre_caracteristica" required>
                </div>
                <div class="form-group">
                    <label for="codigo_caracteristica">Código de la Característica</label>
                    <input type="text" class="form-control" id="codigo_caracteristica" name="codigo_caracteristica" required>
                </div>
                <div class="form-group">
                    <label for="id_factor">Factor</label>
                    <select class="form-control" id="id_factor" name="id_factor" required>
                        @foreach ($factores as $factor)
                            <option value="{{ $factor->id_factor }}">{{ $factor->nombre_factor }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
