@extends('layouts.app')

@section('content')
    <h1>Crear Rol</h1>

    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <label for="descp_rol">Descripción del Rol:</label>
        <input type="text" name="descp_rol" id="descp_rol">
        <label for="permisos">Permisos:</label>
        <textarea name="permisos" id="permisos"></textarea>
        <button type="submit">Crear</button>
    </form>
@endsection
