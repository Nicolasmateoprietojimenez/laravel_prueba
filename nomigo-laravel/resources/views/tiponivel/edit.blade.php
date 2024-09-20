@extends('layouts.app')

@section('content')
    <h1>Editar Tipo de Nivel de Riesgo</h1>

    <form action="{{ route('tipos_nivel_riesgo.update', $tipoNivelRiesgo->id_tipo_nivel_riesgo) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="descp_tipo_nivel_riesgo">Descripción</label>
            <input type="text" name="descp_tipo_nivel_riesgo" class="form-control" value="{{ $tipoNivelRiesgo->descp_tipo_nivel_riesgo }}" required>
        </div>
        <div class="form-group">
            <label for="porc_desc">Porcentaje de Descuento</label>
            <input type="number" step="0.01" name="porc_desc" class="form-control" value="{{ $tipoNivelRiesgo->porc_desc }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
@endsection
