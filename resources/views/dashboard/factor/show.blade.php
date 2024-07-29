<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Factores') }}
        </h2>
    </x-slot>
<div class="container">
    <h1 class="my-4">Detalle del Factor</h1>
    <div class="card">
        <div class="card-header">
            Factor: {{ $factor->nombre_factor }}
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $factor->id_factor }}</p>
            <p><strong>Nombre:</strong> {{ $factor->nombre_factor }}</p>
            <p><strong>Código:</strong> {{ $factor->codigo_factor }}</p>
            <a href="{{ route('factor.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>
</div>
</x-app-layout>
