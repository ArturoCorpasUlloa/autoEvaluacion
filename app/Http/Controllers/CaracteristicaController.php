<?php

namespace App\Http\Controllers;

use App\Models\Caracteristica;
use App\Models\Factor;
use Illuminate\Http\Request;

class CaracteristicaController extends Controller
{
    public function index()
    {
        $caracteristicas = Caracteristica::with('factor')->get();
        return view('dashboard.caracteristica.index', compact('caracteristicas'));
    }

    public function create()
    {
        $factores = Factor::all();
        return view('dashboard.caracteristica.create', compact('factores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_caracteristica' => 'required|string|max:255',
            'codigo_caracteristica' => 'required|string|max:255',
            'id_factor' => 'required|integer|exists:factores,id_factor',
        ]);

        Caracteristica::create($request->all());

        return redirect()->route('caracteristica.index')
                         ->with('success', 'Característica creada con éxito.');
    }

    public function show(Caracteristica $caracteristica)
    {
        return view('dashboard.caracteristica.show', compact('caracteristica'));
    }

    public function edit(Caracteristica $caracteristica)
    {
        $factores = Factor::all();
        return view('dashboard.caracteristica.edit', compact('caracteristica', 'factores'));
    }

    public function update(Request $request, Caracteristica $caracteristica)
    {
        $request->validate([
            'nombre_caracteristica' => 'required|string|max:255',
            'codigo_caracteristica' => 'required|string|max:255',
            'id_factor' => 'required|integer|exists:factores,id_factor',
        ]);

        $caracteristica->update($request->all());

         return redirect()->route('caracteristica.index')
                          ->with('success', 'Característica actualizada con éxito.');
    }

    public function destroy(Caracteristica $caracteristica)
    {
        $caracteristica->delete();

        return redirect()->route('caracteristica.index')
                         ->with('success', 'Característica eliminada con éxito.');
    }
}
