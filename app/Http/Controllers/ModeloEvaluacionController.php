<?php

namespace App\Http\Controllers;

use App\Models\ModeloEvaluacion;
use App\Models\Programa;
use Illuminate\Http\Request;

class ModeloEvaluacionController extends Controller
{
    public function index()
    {
        $modelos = ModeloEvaluacion::with('programa')->get();
        return view('modelo_evaluacion.index', compact('modelos'));
    }

    public function create()
    {
        $programas = Programa::all();
        return view('modelo_evaluacion.create', compact('programas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_programa' => 'required|integer|exists:programas,id_programa',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
        ]);

        ModeloEvaluacion::create($request->all());

        return redirect()->route('modelos_evaluacion.index')
                         ->with('success', 'Modelo de evaluación creado con éxito.');
    }

    public function show(ModeloEvaluacion $modeloEvaluacion)
    {
        $modeloEvaluacion = $modeloEvaluacion->with('programa')->find($modeloEvaluacion->id_modelo);
        return view('modelo_evaluacion.show', compact('modeloEvaluacion'));
    }

    public function edit(ModeloEvaluacion $modeloEvaluacion)
    {
        $programas = Programa::all();
        return view('modelo_evaluacion.edit', compact('modeloEvaluacion', 'programas'));
    }

    public function update(Request $request, ModeloEvaluacion $modeloEvaluacion)
    {
        $request->validate([
            'id_programa' => 'required|integer|exists:programas,id_programa',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
        ]);

        $modeloEvaluacion->update($request->all());

        return redirect()->route('modelos_evaluacion.index')
                         ->with('success', 'Modelo de evaluación actualizado con éxito.');
    }

    public function destroy(ModeloEvaluacion $modeloEvaluacion)
    {
        $modeloEvaluacion->delete();

        return redirect()->route('modelos_evaluacion.index')
                         ->with('success', 'Modelo de evaluación eliminado con éxito.');
    }
}
