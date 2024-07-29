<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Características') }}
        </h2>
    </x-slot>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <h1 class="text-center">Crear Aspecto</h1>
    <form action="{{ route('aspecto.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre_aspecto">Nombre del Aspecto</label>
            <input type="text" class="form-control" id="nombre_aspecto" name="nombre_aspecto" required>
        </div>
        <div class="form-group">
            <label for="codigo_aspecto">Código del Aspecto</label>
            <input type="text" class="form-control" id="codigo_aspecto" name="codigo_aspecto" required>
        </div>
        <div class="form-group">
            <label for="id_caracteristica">Característica</label>
            <select class="form-control" id="id_caracteristica" name="id_caracteristica" required>
                @foreach ($caracteristicas as $caracteristica)
                    <option value="{{ $caracteristica->id_caracteristica }}">{{ $caracteristica->nombre_caracteristica }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('aspecto.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
</x-app-layout>