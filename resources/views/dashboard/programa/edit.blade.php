<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editando Programa') }}
        </h2>
    </x-slot>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Editar Programa</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('programa.update', $programa->id_programa) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre_programa">Nombre del Programa</label>
                    <input type="text" class="form-control" id="nombre_programa" name="nombre_programa" value="{{ $programa->nombre_programa }}" required>
                </div>
                <div class="form-group">
                    <label for="codigo_programa">Código del Programa</label>
                    <input type="text" class="form-control" id="codigo_programa" name="codigo_programa" value="{{ $programa->codigo_programa }}" required>
                </div>
                <div class="form-group">
                    <label for="nivel_formacion">Nivel de Formación</label>
                    <select class="form-control" id="nivel_formacion" name="nivel_formacion" required>
                        <option value="Tecnólogo" {{ $programa->nivel_formacion == 'Tecnólogo' ? 'selected' : '' }}>Tecnólogo</option>
                        <option value="Profesional" {{ $programa->nivel_formacion == 'Profesional' ? 'selected' : '' }}>Profesional</option>
                        <option value="Postgrado" {{ $programa->nivel_formacion == 'Postgrado' ? 'selected' : '' }}>Postgrado</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="facultad">Facultad</label>
                    <select class="form-control" id="facultad" name="facultad" required>
                        <option value="Facultad de Ingeniería y Ciencias Agropecuarias" {{ $programa->facultad == 'Facultad de Ingeniería y Ciencias Agropecuarias' ? 'selected' : '' }}>Facultad de Ingeniería y Ciencias Agropecuarias</option>
                        <option value="Facultad de Ciencias Económicas Administrativas y Contables" {{ $programa->facultad == 'Facultad de Ciencias Económicas Administrativas y Contables' ? 'selected' : '' }}>Facultad de Ciencias Económicas Administrativas y Contables</option>
                        <option value="Facultad de Educación" {{ $programa->facultad == 'Facultad de Educación' ? 'selected' : '' }}>Facultad de Educación</option>
                        <option value="Facultad de Ciencias y Humanas" {{ $programa->facultad == 'Facultad de Ciencias y Humanas' ? 'selected' : '' }}>Facultad de Ciencias y Humanas</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('programa.index') }}" class="btn btn-secondary">Volver</a>
            </form>
        </div>
    </div>
</div>

</x-app-layout>
