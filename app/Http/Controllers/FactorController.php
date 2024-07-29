<?php

namespace App\Http\Controllers;

use App\Models\Factor;
use Illuminate\Http\Request;

class FactorController extends Controller
{
    public function index()
    {
        $factores = Factor::all();
        return view('dashboard.factor.index', compact('factores'));
    }

    public function create()
    {
        return view('dashboard.factor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_factor' => 'required|string|max:255',
            'codigo_factor' => 'required|string|max:255',
        ]);

        Factor::create($request->all());

        return redirect()->route('factor.index')
            ->with('success', 'Factor created successfully.');
    }

    public function show($id)
    {
        $factor = Factor::findOrFail($id);
        return view('dashboard.factor.show', compact('factor'));
    }

    public function edit($id)
    {
        $factor = Factor::findOrFail($id);
        return view('dashboard.factor.edit', compact('factor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_factor' => 'required|string|max:255',
            'codigo_factor' => 'required|string|max:255',
        ]);

        $factor = Factor::findOrFail($id);
        $factor->update($request->all());

        return redirect()->route('factor.index')
            ->with('success', 'Factor updated successfully.');
    }

    public function destroy($id)
    {
        $factor = Factor::findOrFail($id);
        $factor->delete();
        return redirect()->route('factor.index')
            ->with('success', 'Factor deleted successfully.');
    }
}
