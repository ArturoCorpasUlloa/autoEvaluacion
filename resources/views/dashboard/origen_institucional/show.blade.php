<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Origienes de Evidendicas') }}
        </h2>
    </x-slot>

<div class="container mt-5">
    <h1 class="fw-bold text-secondary mb-4">Detalles del Origen Institucional</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nombre: {{ $origenInstitucional->nombre_origen }}</h5>
            <p class="card-text">Responsable: {{ $origenInstitucional->responsable }}</p>
            <p class="card-text">Correo: {{ $origenInstitucional->correo_responsable }}</p>
            <a href="{{ route('origen.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
</x-app-layout>
