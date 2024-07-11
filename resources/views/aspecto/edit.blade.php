@extends('layouts.app')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <h1 class="text-center">Editar Aspecto</h1>
    <form action="{{ route('aspectos.update', $aspecto->id_aspecto) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre_aspecto">Nombre del Aspecto</label>
            <input type="text" class="form-control" id="nombre_aspecto" name="nombre_aspecto" value="{{ $aspecto->nombre_aspecto }}" required>
        </div>
        <div class="form-group">
            <label for="codigo_aspecto">Código del Aspecto</label>
            <input type="text" class="form-control" id="codigo_aspecto" name="codigo_aspecto" value="{{ $aspecto->codigo_aspecto }}" required>
        </div>
        <div class="form-group">
            <label for="id_caracteristica">Característica</label>
            <select class="form-control" id="id_caracteristica" name="id_caracteristica" required>
                @foreach ($caracteristicas as $caracteristica)
                    <option value="{{ $caracteristica->id_caracteristica }}" @if($aspecto->id_caracteristica == $caracteristica->id_caracteristica) selected @endif>{{ $caracteristica->nombre_caracteristica }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
