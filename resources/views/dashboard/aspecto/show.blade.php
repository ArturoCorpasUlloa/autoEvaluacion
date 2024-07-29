<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Características') }}
        </h2>
    </x-slot>
<div class="container mt-5">
    <h1 class="text-center">Detalles del Aspecto</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $aspecto->id_aspecto }}</p>
            <p><strong>Nombre:</strong> {{ $aspecto->nombre_aspecto }}</p> {{--Debes replantear esto porqie los aspectos son bastantetexto el tamaño lo debes cambiar.--}}
            <p><strong>Código:</strong> {{ $aspecto->codigo_aspecto }}</p>
            <p><strong>Característica:</strong> {{ $aspecto->caracteristica->nombre_caracteristica }}</p>
            <a href="{{ route('aspecto.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
</x-app-layout>
