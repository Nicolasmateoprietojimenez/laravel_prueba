<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::all();
        return view('empresas.index', compact('empresas'));
    }

    public function create()
    {
        return view('empresas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nit' => 'required|unique:empresa,nit',
            'razon_social' => 'required',
            'correo' => 'required|email|unique:empresa,correo',
            'estado_sistema' => 'required',
        ]);

        Empresa::create($request->all());
        return redirect()->route('empresas.index')->with('success', 'Empresa creada con éxito.');
    }

    public function edit(Empresa $empresa)
    {
        return view('empresas.edit', compact('empresa'));
    }

    public function update(Request $request, Empresa $empresa)
    {
        $request->validate([
            'razon_social' => 'required',
            'correo' => 'required|email|unique:empresa,correo,' . $empresa->nit,
            'estado_sistema' => 'required',
        ]);

        $empresa->update($request->all());
        return redirect()->route('empresas.index')->with('success', 'Empresa actualizada con éxito.');
    }

    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return redirect()->route('empresas.index')->with('success', 'Empresa eliminada con éxito.');
    }
}
