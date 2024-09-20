@extends('layouts.app')

@section('content')
    <h1>Crear Empresa</h1>

    <form action="{{ route('empresas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nit">NIT</label>
            <input type="text" name="nit" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="razon_social">Razón Social</label>
            <input type="text" name="razon_social" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" name="correo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="estado_sistema">Estado</label>
            <input type="text" name="estado_sistema" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection
