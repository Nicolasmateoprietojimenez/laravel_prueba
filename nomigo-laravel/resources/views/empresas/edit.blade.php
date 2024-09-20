@extends('layouts.app')

@section('content')
    <h1>Editar Empresa</h1>

    <form action="{{ route('empresas.update', $empresa->nit) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="razon_social">Razón Social</label>
            <input type="text" name="razon_social" class="form-control" value="{{ $empresa->razon_social }}" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" name="correo" class="form-control" value="{{ $empresa->correo }}" required>
        </div>
        <div class="form-group">
            <label for="estado_sistema">Estado</label>
            <input type="text" name="estado_sistema" class="form-control" value="{{ $empresa->estado_sistema }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
@endsection
