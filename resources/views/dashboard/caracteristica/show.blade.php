<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Detalles de la Característica</h1>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $caracteristica->id_caracteristica }}</p>
            <p><strong>Nombre:</strong> {{ $caracteristica->nombre_caracteristica }}</p>
            <p><strong>Código:</strong> {{ $caracteristica->codigo_caracteristica }}</p>
            <p><strong>Factor:</strong> {{ $caracteristica->factor->nombre_factor }}</p>
            <a href="{{ route('caracteristica.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
</x-app-layout>
