<?php

namespace App\Http\Controllers;

use App\Models\ModeloAspecto;
use App\Models\ModeloEvaluacion;
use App\Models\Aspecto;
use Illuminate\Http\Request;

class ModeloAspectoController extends Controller
{
    public function index()
    {
        $modelosAspectos = ModeloAspecto::with(['modeloEvaluacion', 'aspecto'])->get();
        return view('modelo_aspecto.index', compact('modelosAspectos'));
    }

    public function create()
    {
        $modelosEvaluaciones = ModeloEvaluacion::all();
        $aspectos = Aspecto::all();
        return view('modelo_aspecto.create', compact('modelosEvaluaciones', 'aspectos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_modelo' => 'required|integer|exists:modelos_evaluacion,id_modelo',
            'id_aspecto' => 'required|integer|exists:aspectos,id_aspecto',
        ]);

        ModeloAspecto::create($request->all());

        return redirect()->route('modelo_aspecto.index')
                         ->with('success', 'Modelo aspecto creado con éxito.');
    }

    public function show(ModeloAspecto $modeloAspecto)
    {
        return view('modelo_aspecto.show', compact('modeloAspecto'));
    }

    public function edit(ModeloAspecto $modeloAspecto)
    {
        $modelosEvaluaciones = ModeloEvaluacion::all();
        $aspectos = Aspecto::all();
        return view('modelo_aspecto.edit', compact('modeloAspecto', 'modelosEvaluaciones', 'aspectos'));
    }

    public function update(Request $request, ModeloAspecto $modeloAspecto)
    {
        $request->validate([
            'id_modelo' => 'required|integer|exists:modelos_evaluacion,id_modelo',
            'id_aspecto' => 'required|integer|exists:aspectos,id_aspecto',
        ]);

        $modeloAspecto->update($request->all());

        return redirect()->route('modelo_aspecto.index')
                         ->with('success', 'Modelo aspecto actualizado con éxito.');
    }

    public function destroy(ModeloAspecto $modeloAspecto)
    {
        $modeloAspecto->delete();

        return redirect()->route('modelo_aspecto.index')
                         ->with('success', 'Modelo aspecto eliminado con éxito.');
    }
}
