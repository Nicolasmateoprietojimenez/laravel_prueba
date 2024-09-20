@extends('layouts.app')

@section('content')
    <h1>Listado de Tipos de Nivel de Riesgo</h1>
    <a href="{{ route('tipos_nivel_riesgo.create') }}" class="btn btn-primary">Crear Tipo de Nivel de Riesgo</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Porcentaje de Descuento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tipos as $tipo)
                <tr>
                    <td>{{ $tipo->id_tipo_nivel_riesgo }}</td>
                    <td>{{ $tipo->descp_tipo_nivel_riesgo }}</td>
                    <td>{{ $tipo->porc_desc }}%</td>
                    <td>
                        <a href="{{ route('tipos_nivel_riesgo.edit', $tipo->id_tipo_nivel_riesgo) }}" class="btn btn-warning">Editar</a>

                        <form action="{{ route('tipos_nivel_riesgo.destroy', $tipo->id_tipo_nivel_riesgo) }}" method="POST" style="display:inline;">
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
