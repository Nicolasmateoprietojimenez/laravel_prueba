@extends('layouts.app')

@section('content')
    <h1>Editar Producto</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $producto->nombre }}"><br>

        <label>Descripción:</label>
        <textarea name="descripcion">{{ $producto->descripcion }}</textarea><br>

        <label>País de Origen:</label>
        <input type="text" name="pais_origen" value="{{ $producto->pais_origen }}"><br>

        <label>Presentación:</label>
        <input type="text" name="presentacion" value="{{ $producto->presentacion }}"><br>

        <label>Precio:</label>
        <input type="text" name="precio" value="{{ $producto->precio }}"><br>

        <label>Stock:</label>
        <input type="number" name="stock" value="{{ $producto->stock }}"><br>

        <button type="submit">Actualizar</button>
    </form>

    <a href="{{ route('productos.index') }}">Volver</a>
@endsection
