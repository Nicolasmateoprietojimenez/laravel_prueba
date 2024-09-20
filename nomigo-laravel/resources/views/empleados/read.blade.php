@extends('layouts.app')

@section('content')

<h1>Lista de Empleados</h1>

<table>
    <thead>
        <tr>
            <th>Número de Documento</th>
            <th>Tipo de Documento</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Fecha de Nacimiento</th>
            <th>Sexo</th>
            <th>Estado</th>
            <th>Teléfono</th>
            <th>Estado Civil</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $empleado->nro_documento }}</td>
                <td>{{ $empleado->tipo_documento }}</td>
                <td>{{ $empleado->nombres }}</td>
                <td>{{ $empleado->apellidos }}</td>
                <td>{{ $empleado->fecha_nacimiento }}</td>
                <td>{{ $empleado->sexo }}</td>
                <td>{{ $empleado->estado_sistema ? 'Activo' : 'Inactivo' }}</td>
                <td>{{ $empleado->telefono }}</td>
                <td>{{ $empleado->estado_civil }}</td>
                <td>{{ $empleado->correo }}</td>
                <td>
    <div class="acciones">
        <form action="">
        <a href="{{ route('empleados.edit', $empleado->id_empleado) }}" class="btn-editar">Editar</a>
        </form>
        
        <form action="{{ route('empleados.destroy', $empleado->id_empleado) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-eliminar" onclick="return confirm('¿Estás seguro de que deseas eliminar este empleado?');">Eliminar</button>
        </form>
    </div>
</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
