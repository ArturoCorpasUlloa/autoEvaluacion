@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Editar Factor</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('factores.update', $factor->id_factor) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre_factor">Nombre del Factor:</label>
            <input type="text" name="nombre_factor" class="form-control" value="{{ $factor->nombre_factor }}">
        </div>
        <div class="form-group">
            <label for="codigo_factor">Código del Factor:</label>
            <input type="text" name="codigo_factor" class="form-control" value="{{ $factor->codigo_factor }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

@endsection
