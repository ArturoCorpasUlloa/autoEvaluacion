<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creando un Factor') }}
        </h2>
    </x-slot>
<div class="container">
    

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('factor.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre_factor">Nombre del Factor:</label>
            <input type="text" name="nombre_factor" class="form-control" value="{{ old('nombre_factor') }}">
        </div>
        <div class="form-group">
            <label for="codigo_factor">Código del Factor:</label>
            <input type="text" name="codigo_factor" class="form-control" value="{{ old('codigo_factor') }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
</x-app-layout>