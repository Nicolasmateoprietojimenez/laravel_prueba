<?php

namespace App\Http\Controllers;
use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Rol::all();
        return view('roles.index', compact('roles'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descp_rol' => 'required|string|max:255',
            'permisos' => 'nullable|json',
        ]);
    
        Rol::create($request->all());
    
        return redirect()->route('roles.index')->with('success', 'Rol creado con éxito');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Rol $role)
    {
        return view('roles.show', compact('role'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rol $role)
    {
        return view('roles.edit', compact('role'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rol $role)
    {
        $request->validate([
            'descp_rol' => 'required|string|max:255',
            'permisos' => 'nullable|json',
        ]);
    
        $role->update($request->all());
    
        return redirect()->route('roles.index')->with('success', 'Rol actualizado con éxito');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rol $role)
    {
        $role->delete();
    
        return redirect()->route('roles.index')->with('success', 'Rol eliminado con éxito');
    }
    
}
