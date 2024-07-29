<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Características') }}
        </h2>
    </x-slot>
<div class="container mt-5">
    <h1 class="text-center mb-4">Crear Docente</h1>
    <form action="{{ route('docente.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre_profesor" class="form-label">Nombre del Profesor</label>
            <input type="text" class="form-control" id="nombre_profesor" name="nombre_profesor">
        </div>
        <div class="mb-3">
            <label for="correo_profesor" class="form-label">Correo del Profesor</label>
            <input type="email" class="form-control" id="correo_profesor" name="correo_profesor">
        </div>
        <div class="mb-3">
            <label for="id_programa" class="form-label">Programa</label>
            <select class="form-control" id="id_programa" name="id_programa">
                @foreach($programas as $programa)
                    <option value="{{ $programa->id_programa }}">{{ $programa->nombre_programa }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('docente.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</x-app-layout>
