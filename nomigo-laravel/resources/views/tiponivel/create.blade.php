@extends('layouts.app')

@section('content')
    <h1>Crear Tipo de Nivel de Riesgo</h1>

    <form action="{{ route('tipos_nivel_riesgo.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="descp_tipo_nivel_riesgo">Descripción</label>
            <input type="text" name="descp_tipo_nivel_riesgo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="porc_desc">Porcentaje de Descuento</label>
            <input type="number" step="0.01" name="porc_desc" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection
