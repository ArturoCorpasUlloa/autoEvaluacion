<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles del Docente') }}
        </h2>
    </x-slot>
<div class="container mt-5">
    
    <div class="card">
        <div class="card-body">
            <p class="fw-bold text-secondary">Nombre: {{ $docente->nombre_profesor }}</p>
            <p class="fw-bold text-secondary">Correo: {{ $docente->correo_profesor }}</p>
            <p class="fw-bold text-secondary">Programa: {{ $docente->programa->nombre_programa }}</p>
            <a href="{{ route('docente.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
{{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script> --}}

</x-app-layout>
