<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    public function index()
    {
        $programas = Programa::all();
        return view('dashboard.programa.index', compact('programas'));
    }

    public function create()
    {
        return view('dashboard.programa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_programa' => 'required|string|max:255',
            'codigo_programa' => 'required|string|max:255',
            'nivel_formacion' => 'required|string|max:255',
        ]);

        Programa::create($request->all());

        return redirect()->route('programa.index')
                         ->with('success', 'Programa creado con éxito.');
    }

    public function show(Programa $programa)
    {
        $programa=Programa::findOrFail($programa->id_programa);
        return view('dashboard.programa.show', compact('programa'));
    }

    public function edit($id)
    {
        $programa=Programa::findOrFail($id);
        return view('dashboard.programa.edit', compact('programa'));
    }

    public function update(Request $request, $id)
    {
        $programa=Programa::findOrFail($id);
        $request->validate([
            'nombre_programa' => 'required|string|max:255',
            'codigo_programa' => 'required|string|max:255',
            'nivel_formacion' => 'required|string|max:255',
        ]);

        $programa->update($request->all());

        return redirect()->route('programa.index')
                         ->with('success', 'Programa actualizado con éxito.');
    }

    public function destroy(Programa $programa)
    {
        $programa->delete();

        return redirect()->route('programa.index')
                         ->with('success', 'Programa eliminado con éxito.');
    }
}
