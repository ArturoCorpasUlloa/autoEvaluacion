<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Programa;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        $docentes = Docente::with('programa')->get();
        return view('docente.index', compact('docentes'));
    }

    public function create()
    {
        $programas = Programa::all();
        return view('docente.create', compact('programas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_profesor' => 'required|string|max:255',
            'correo_profesor' => 'required|string|max:255|email|unique:docentes',
            'id_programa' => 'required|integer|exists:programas,id_programa',
        ]);

        Docente::create($request->all());

        return redirect()->route('docentes.index')
                         ->with('success', 'Docente creado con éxito.');
    }

    public function show(Docente $docente)
    {
        return view('docente.show', compact('docente'));
    }

    public function edit(Docente $docente)
    {
        $programas = Programa::all();
        return view('docente.edit', compact('docente', 'programas'));
    }

    public function update(Request $request, Docente $docente)
    {
        $request->validate([
            'nombre_profesor' => 'required|string|max:255',
            'correo_profesor' => 'required|string|max:255|email|unique:docentes,correo_profesor,' . $docente->id_profesor . ',id_profesor',
            'id_programa' => 'required|integer|exists:programas,id_programa',
        ]);

        $docente->update($request->all());

        return redirect()->route('docentes.index')
                         ->with('success', 'Docente actualizado con éxito.');
    }

    public function destroy(Docente $docente)
    {
        $docente->delete();

        return redirect()->route('docentes.index')
                         ->with('success', 'Docente eliminado con éxito.');
    }
}
