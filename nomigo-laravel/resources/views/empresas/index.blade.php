@extends('layouts.app')

@section('content')
    <h1>Listado de Empresas</h1>
    <a href="{{ route('empresas.create') }}" class="btn btn-primary">Crear Empresa</a>

    <table class="table">
        <thead>
            <tr>
                <th>NIT</th>
                <th>Razón Social</th>
                <th>Correo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empresas as $empresa)
                <tr>
                    <td>{{ $empresa->nit }}</td>
                    <td>{{ $empresa->razon_social }}</td>
                    <td>{{ $empresa->correo }}</td>
                    <td>{{ $empresa->estado_sistema }}</td>
                    <td>
                        <a href="{{ route('empresas.edit', $empresa->nit) }}" class="btn btn-warning">Editar</a>

                        <form action="{{ route('empresas.destroy', $empresa->nit) }}" method="POST" style="display:inline;">
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
