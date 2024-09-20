@extends('layouts.app')

@section('content')
    <h1>Editar Rol</h1>

    <form action="{{ route('roles.update', $role->id_rol) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="descp_rol">Descripción del Rol:</label>
        <input type="text" name="descp_rol" id="descp_rol" value="{{ $role->descp_rol }}">
        <label for="permisos">Permisos:</label>
        <textarea name="permisos" id="permisos">{{ $role->permisos }}</textarea>
        <button type="submit">Actualizar</button>
    </form>
@endsection
