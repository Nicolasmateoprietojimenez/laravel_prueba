<?php

namespace App\Http\Controllers;

use App\Models\TipoNivelRiesgo;
use Illuminate\Http\Request;

class TipoNivelRiesgoController extends Controller
{
    public function index()
    {
        $tipos = TipoNivelRiesgo::all();
        return view('tipos_nivel_riesgo.index', compact('tipos'));
    }

    public function create()
    {
        return view('tipos_nivel_riesgo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descp_tipo_nivel_riesgo' => 'required',
            'porc_desc' => 'required|numeric|between:0,100',
        ]);

        TipoNivelRiesgo::create($request->all());
        return redirect()->route('tipos_nivel_riesgo.index')->with('success', 'Nivel de riesgo creado con éxito.');
    }

    public function edit(TipoNivelRiesgo $tipoNivelRiesgo)
    {
        return view('tipos_nivel_riesgo.edit', compact('tipoNivelRiesgo'));
    }

    public function update(Request $request, TipoNivelRiesgo $tipoNivelRiesgo)
    {
        $request->validate([
            'descp_tipo_nivel_riesgo' => 'required',
            'porc_desc' => 'required|numeric|between:0,100',
        ]);

        $tipoNivelRiesgo->update($request->all());
        return redirect()->route('tipos_nivel_riesgo.index')->with('success', 'Nivel de riesgo actualizado con éxito.');
    }

    public function destroy(TipoNivelRiesgo $tipoNivelRiesgo)
    {
        $tipoNivelRiesgo->delete();
        return redirect()->route('tipos_nivel_riesgo.index')->with('success', 'Nivel de riesgo eliminado con éxito.');
    }
}
