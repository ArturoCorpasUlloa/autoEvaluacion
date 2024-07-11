<?php

namespace App\Http\Controllers;

use App\Models\Evidencia;
use App\Models\Aspecto;
use App\Models\User;
use App\Models\OrigenInstitucional;
use Illuminate\Http\Request;

class EvidenciaController extends Controller
{
    public function index()
    {
        $evidencias = Evidencia::all();
        return view('evidencia.index', compact('evidencias'));
    }

    public function create()
    {
        $aspectos = Aspecto::all();
        $usuarios = User::all();
        $origenes = OrigenInstitucional::all();
        return view('evidencia.create', compact('aspectos', 'usuarios', 'origenes'));
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'id_aspecto' => 'required|exists:aspectos,id_aspecto',
            'id_usuario' => 'required|exists:users,id',
            'tipo_evidencia' => 'required|string|max:255',
            'fecha_carga' => 'required|date',
            'nombre_archivo' => 'required|string|max:255',
            'ruta_archivo' => 'required|string|max:255',
            'id_origen' => 'required|exists:origenes_institucionales,id_origen',
        ]);

        // Crear evidencia
        Evidencia::create($request->all());

        return redirect()->route('evidencias.index')
            ->with('success', 'Evidencia creada exitosamente.');
    }

    public function edit($id)
    {
        $evidencia = Evidencia::findOrFail($id);
        $aspectos = Aspecto::all();
        $usuarios = User::all();
        $origenes = OrigenInstitucional::all();
        return view('evidencia.edit', compact('evidencia', 'aspectos', 'usuarios', 'origenes'));
    }

    public function update(Request $request, Evidencia $evidencia)
    {
        // Validación de datos
        $request->validate([
            'id_aspecto' => 'required|exists:aspectos,id_aspecto',
            'id_usuario' => 'required|exists:users,id',
            'tipo_evidencia' => 'required|string|max:255',
            'fecha_carga' => 'required|date',
            'nombre_archivo' => 'required|string|max:255',
            'ruta_archivo' => 'required|string|max:255',
            'id_origen' => 'required|exists:origenes_institucionales,id_origen',
        ]);

        // Actualizar evidencia
        $evidencia->update($request->all());

        return redirect()->route('evidencias.index')
            ->with('success', 'Evidencia actualizada exitosamente.');
    }

    public function destroy(Evidencia $evidencia)
    {
        // Eliminar evidencia
        $evidencia->delete();

        return redirect()->route('evidencias.index')
            ->with('success', 'Evidencia eliminada exitosamente.');
    }
}
