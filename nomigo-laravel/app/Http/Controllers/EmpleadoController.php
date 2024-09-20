<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Rol;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function create()
    {
        $roles = Rol::all();
        return view('empleados.insert', compact('roles'));
    }

    public function index()
    {
        $empleados = Empleado::all();
        $roles = Rol::all();
        return view('empleados.read', compact('empleados', 'roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nro_documento' => 'required|string|max:255',
            'tipo_documento' => 'required|string|max:50',
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'sexo' => 'required|string|max:10',
            'estado_sistema' => 'required|boolean',
            'telefono' => 'nullable|string|max:50',
            'estado_civil' => 'nullable|string|max:50',
            'correo' => 'nullable|email|max:255',
            'contraseña' => 'required|string|min:8',
            'id_rol' => 'required|exists:rol,id_rol',
        ]);

        Empleado::create([
            'nro_documento' => $request->input('nro_documento'),
            'tipo_documento' => $request->input('tipo_documento'),
            'nombres' => $request->input('nombres'),
            'apellidos' => $request->input('apellidos'),
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
            'sexo' => $request->input('sexo'),
            'estado_sistema' => $request->input('estado_sistema'),
            'telefono' => $request->input('telefono'),
            'estado_civil' => $request->input('estado_civil'),
            'correo' => $request->input('correo'),
            'contraseña' => bcrypt($request->input('contraseña')),
            'id_rol' => $request->input('id_rol'),
        ]);

        return redirect()->route('empleados.create')->with('success', 'Empleado creado correctamente.');
    }

    public function edit($id_empleado) // Cambiado a $id_empleado
    {
        $empleado = Empleado::findOrFail($id_empleado);
        $roles = Rol::all();
        return view('empleados.edit', compact('empleado', 'roles'));
    }

    public function update(Request $request, $id_empleado) // Cambiado a $id_empleado
    {
        $request->validate([
            'nro_documento' => 'required|string|max:255',
            'tipo_documento' => 'required|string|max:50',
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'sexo' => 'required|string|max:10',
            'estado_sistema' => 'required|boolean',
            'telefono' => 'nullable|string|max:50',
            'estado_civil' => 'nullable|string|max:50',
            'correo' => 'nullable|email|max:255',
            'contraseña' => 'nullable|string|min:8',
            'id_rol' => 'required|exists:rol,id_rol',
        ]);

        $empleado = Empleado::findOrFail($id_empleado);
        $empleado->update([
            'nro_documento' => $request->input('nro_documento'),
            'tipo_documento' => $request->input('tipo_documento'),
            'nombres' => $request->input('nombres'),
            'apellidos' => $request->input('apellidos'),
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
            'sexo' => $request->input('sexo'),
            'estado_sistema' => $request->input('estado_sistema'),
            'telefono' => $request->input('telefono'),
            'estado_civil' => $request->input('estado_civil'),
            'correo' => $request->input('correo'),
            'contraseña' => $request->input('contraseña') ? bcrypt($request->input('contraseña')) : $empleado->contraseña,
            'id_rol' => $request->input('id_rol'),
        ]);

        return redirect()->route('empleados.index')->with('success', 'Empleado actualizado correctamente.');
    }

    public function destroy($id_empleado) // Cambiado a $id_empleado
    {
        $empleado = Empleado::findOrFail($id_empleado);
        $empleado->delete();

        return redirect()->route('empleados.index')->with('success', 'Empleado eliminado correctamente.');
    }
}
