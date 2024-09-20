@extends('layouts.app')

@section('content')
    <h1>Listado de Roles</h1>

    <a href="{{ route('roles.create') }}" class="btn btn-primary">Crear Rol</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{ $role->id_rol }}</td>
                    <td>{{ $role->descp_rol }}</td>
                    <td>
                        <a href="{{ route('roles.edit', ['role' => $role->id_rol]) }}" class="btn btn-warning">Editar</a>

                        <form action="{{ route('roles.destroy', ['role' => $role->id_rol]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
