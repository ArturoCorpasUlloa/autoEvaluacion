<?php

namespace App\Http\Controllers;

use App\Models\OrigenInstitucional;
use Illuminate\Http\Request;

class OrigenInstitucionalController extends Controller
{
    public function index()
    {
        $origenes = OrigenInstitucional::all();
        return view('dashboard.origen_institucional.index', compact('origenes'));
    }

    public function create()
    {
        return view('dashboard.origen_institucional.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_origen' => 'required|string|max:255',
            'responsable' => 'required|string|max:255',
            'correo_responsable' => 'required|string|max:255|email',
        ]);

        OrigenInstitucional::create($request->all());

        return redirect()->route('origen.index')
                         ->with('success', 'Origen institucional creado con éxito.');
    }

    public function show($id)
    {
        $origenInstitucional = OrigenInstitucional::findOrFail($id);
        return view('dashboard.origen_institucional.show', compact('origenInstitucional'));
    }

    public function edit($id)
    {
        $origenInstitucional = OrigenInstitucional::findOrFail($id);
        return view('dashboard.origen_institucional.edit', compact('origenInstitucional'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_origen' => 'required|string|max:255',
            'responsable' => 'required|string|max:255',
            'correo_responsable' => 'required|string|max:255|email',
        ]);

        $origenInstitucional = OrigenInstitucional::findOrFail($id);
        $origenInstitucional->update($request->all());

        return redirect()->route('origen.index')
                         ->with('success', 'Origen institucional actualizado con éxito.');
    }

    public function destroy($id)
    {
        $origenInstitucional = OrigenInstitucional::findOrFail($id);
        $origenInstitucional->delete();

        return redirect()->route('origen.index')
                         ->with('success', 'Origen institucional eliminado con éxito.');
    }
}
