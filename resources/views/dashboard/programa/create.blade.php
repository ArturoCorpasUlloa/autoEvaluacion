<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creando Programa') }}
        </h2>
    </x-slot>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Crear Programa</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('programa.store') }}" method="POST">
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
                    <select class="form-control" id="nivel_formacion" name="nivel_formacion" required>
                        <option value="Tecnólogo">Tecnólogo</option>
                        <option value="Profesional">Profesional</option>
                        <option value="Postgrado">Postgrado</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="facultad">Facultad</label>
                    <select class="form-control" id="facultad" name="facultad" required>
                        <option value="Facultad de Ingeniería y Ciencias Agropecuarias">Facultad de Ingeniería y Ciencias Agropecuarias</option>
                        <option value="Facultad de Ciencias Económicas Administrativas y Contables">Facultad de Ciencias Económicas Administrativas y Contables</option>
                        <option value="Facultad de Educación">Facultad de Educación</option>
                        <option value="Facultad de Ciencias y Humanas">Facultad de Ciencias y Humanas</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('programa.index') }}" class="btn btn-secondary">Volver</a>
                
            </form>
        </div>
    </div>
</div>
</x-app-layout>
