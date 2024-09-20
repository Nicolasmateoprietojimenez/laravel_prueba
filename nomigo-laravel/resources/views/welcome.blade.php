@extends('layouts.home')

@section('content')
    <div class="container">
        <h1 class="text-center">Bienvenido a la Gestión de Recursos</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-header">Empleados</div>
                    <div class="card-body">
                        <p>Gestiona todos los empleados de tu empresa.</p>
                        <a href="{{ route('empleados.index') }}" class="btn btn-primary">Ver Empleados</a>
                        <a href="{{ route('empleados.create') }}" class="btn btn-success">Crear Empleado</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-header">Roles</div>
                    <div class="card-body">
                        <p>Gestiona los roles de los empleados.</p>
                        <a href="{{ route('roles.index') }}" class="btn btn-primary">Ver Roles</a>
                        <a href="{{ route('roles.create') }}" class="btn btn-success">Crear Rol</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-header">Empresas</div>
                    <div class="card-body">
                        <p>Gestiona la información de las empresas.</p>
                        <a href="{{ route('empresas.index') }}" class="btn btn-primary">Ver Empresas</a>
                        <a href="{{ route('empresas.create') }}" class="btn btn-success">Crear Empresa</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-header">Tipos de Nivel de Riesgo</div>
                    <div class="card-body">
                        <p>Gestiona los tipos de nivel de riesgo.</p>
                        <a href="{{ route('tipos_nivel_riesgo.index') }}" class="btn btn-primary">Ver Tipos</a>
                        <a href="{{ route('tipos_nivel_riesgo.create') }}" class="btn btn-success">Crear Tipo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
