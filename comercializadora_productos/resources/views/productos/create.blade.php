@extends('layouts.app')

@section('content')
    <h1>Crear Producto</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}"><br>

        <label>Descripción:</label>
        <textarea name="descripcion">{{ old('descripcion') }}</textarea><br>

        <label>País de Origen:</label>
        <input type="text" name="pais_origen" value="{{ old('pais_origen') }}"><br>

        <label>Presentación:</label>
        <input type="text" name="presentacion" value="{{ old('presentacion') }}"><br>

        <label>Precio:</label>
        <input type="text" name="precio" value="{{ old('precio') }}"><br>

        <label>Stock:</label>
        <input type="number" name="stock" value="{{ old('stock') }}"><br>

        <button type="submit">Guardar</button>
    </form>

    <a href="{{ route('productos.index') }}">Volver</a>
@endsection
