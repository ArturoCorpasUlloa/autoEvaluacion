<?php

namespace App\Http\Controllers;

use App\Models\Factor;
use Illuminate\Http\Request;

class FactorController extends Controller
{
    public function index()
    {
        $factores = Factor::all();
        return view('factor.index', compact('factores'));
    }

    public function create()
    {
        return view('factor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_factor' => 'required|string|max:255',
            'codigo_factor' => 'required|string|max:255',
        ]);

        Factor::create($request->all());

        return redirect()->route('factores.index')
            ->with('success', 'Factor created successfully.');
    }

    public function show(Factor $factor)
    {
        return view('factor.show', compact('factor'));
    }

    public function edit(Factor $factor)
    {
        return view('factor.edit', compact('factor'));
    }

    public function update(Request $request, Factor $factor)
    {
        $request->validate([
            'nombre_factor' => 'required|string|max:255',
            'codigo_factor' => 'required|string|max:255',
        ]);

        $factor->update($request->all());

        return redirect()->route('factores.index')
            ->with('success', 'Factor updated successfully.');
    }

    public function destroy(Factor $factor)
    {
        $factor->delete();

        return redirect()->route('factores.index')
            ->with('success', 'Factor deleted successfully.');
    }
}
