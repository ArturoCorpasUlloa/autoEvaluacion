<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Editar Característica</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('caracteristica.update', $caracteristica->id_caracteristica) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre_caracteristica">Nombre de la Característica</label>
                    <input type="text" class="form-control" id="nombre_caracteristica" name="nombre_caracteristica" value="{{ $caracteristica->nombre_caracteristica }}" required>
                </div>
                <div class="form-group">
                    <label for="codigo_caracteristica">Código de la Característica</label>
                    <input type="text" class="form-control" id="codigo_caracteristica" name="codigo_caracteristica" value="{{ $caracteristica->codigo_caracteristica }}" required>
                </div>
                <div class="form-group">
                    <label for="id_factor">Factor</label>
                    <select class="form-control" id="id_factor" name="id_factor" required>
                        @foreach ($factores as $factor)
                            <option value="{{ $factor->id_factor }}" @if($caracteristica->id_factor == $factor->id_factor) selected @endif>{{ $factor->nombre_factor }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
</x-app-layout>
