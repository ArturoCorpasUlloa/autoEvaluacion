<?php

namespace App\Http\Controllers;

use App\Models\Aspecto;
use App\Models\Caracteristica;
use Illuminate\Http\Request;

class AspectoController extends Controller
{
    public function index()
    {
        $aspectos = Aspecto::with('caracteristica')->get();
        return view('dashboard.aspecto.index', compact('aspectos'));
    }

    public function create()
    {
        $caracteristicas = Caracteristica::all();
        return view('dashboard.aspecto.create', compact('caracteristicas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_aspecto' => 'required|string|max:255',
            'codigo_aspecto' => 'required|string|max:255',
            'id_caracteristica' => 'required|integer|exists:caracteristicas,id_caracteristica',
        ]);

        Aspecto::create($request->all());

        return redirect()->route('aspecto.index')
                         ->with('success', 'Aspecto creado con éxito.');
    }

    public function show(Aspecto $aspecto)
    {
        return view('dashboard.aspecto.show', compact('aspecto'));
    }

    public function edit(Aspecto $aspecto)
    {
        $caracteristicas = Caracteristica::all();
        return view('dashboard.aspecto.edit', compact('aspecto', 'caracteristicas'));
    }

    public function update(Request $request, Aspecto $aspecto)
    {
        $request->validate([
            'nombre_aspecto' => 'required|string|max:255',
            'codigo_aspecto' => 'required|string|max:255',
            'id_caracteristica' => 'required|integer|exists:caracteristicas,id_caracteristica',
        ]);

        $aspecto->update($request->all());

        return redirect()->route('aspecto.index')
                         ->with('success', 'Aspecto actualizado con éxito.');
    }

    public function destroy(Aspecto $aspecto)
    {
        $aspecto->delete();

        return redirect()->route('aspecto.index')
                         ->with('success', 'Aspecto eliminado con éxito.');
    }
}
