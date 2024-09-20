@extends('layouts.app')

@section('content')

    <h1>Editar Empleado</h1>

    <form action="{{ route('empleados.update', $empleado->id_empleado) }}" method="POST">
        @csrf
        @method('PUT')
        @include('empleados.form', ['empleado' => $empleado])
        <button type="submit">Actualizar</button>
    </form>

    <a href="{{ route('empleados.index') }}">Volver</a>

@endsection
