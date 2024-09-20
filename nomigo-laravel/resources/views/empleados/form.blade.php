<!-- resources/views/empleados/form.blade.php -->
<label for="nro_documento">Número de Documento:</label>
<input type="text" id="nro_documento" name="nro_documento" required value="{{ old('nro_documento', $empleado->nro_documento ?? '') }}"><br><br>

<label for="tipo_documento">Tipo de Documento:</label>
<select id="tipo_documento" name="tipo_documento" required>
    <option value="" disabled selected>Seleccione una opción</option>
    <option value="CEDULA" {{ old('tipo_documento', $empleado->tipo_documento ?? '') == 'CEDULA' ? 'selected' : '' }}>Cédula</option>
    <option value="PASAPORTE" {{ old('tipo_documento', $empleado->tipo_documento ?? '') == 'PASAPORTE' ? 'selected' : '' }}>Pasaporte</option>
    <option value="CEDULA_EXTRANJERIA" {{ old('tipo_documento', $empleado->tipo_documento ?? '') == 'CEDULA_EXTRANJERIA' ? 'selected' : '' }}>Cédula de Extranjería</option>
</select><br><br>

<label for="nombres">Nombres:</label>
<input type="text" id="nombres" name="nombres" required value="{{ old('nombres', $empleado->nombres ?? '') }}"><br><br>

<label for="apellidos">Apellidos:</label>
<input type="text" id="apellidos" name="apellidos" required value="{{ old('apellidos', $empleado->apellidos ?? '') }}"><br><br>

<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
<input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required value="{{ old('fecha_nacimiento', $empleado->fecha_nacimiento ?? '') }}"><br><br>

<label for="sexo">Sexo:</label>
<select id="sexo" name="sexo" required>
    <option value="" disabled selected>Seleccione una opción</option>
    <option value="M" {{ old('sexo', $empleado->sexo ?? '') == 'M' ? 'selected' : '' }}>Masculino</option>
    <option value="F" {{ old('sexo', $empleado->sexo ?? '') == 'F' ? 'selected' : '' }}>Femenino</option>
    <option value="O" {{ old('sexo', $empleado->sexo ?? '') == 'O' ? 'selected' : '' }}>Otro</option>
</select><br><br>

<label for="estado_sistema">Estado del Sistema:</label>
<input type="checkbox" id="estado_sistema" name="estado_sistema" value="1" {{ old('estado_sistema', $empleado->estado_sistema ?? 0) ? 'checked' : '' }}><br><br>

<label for="telefono">Teléfono:</label>
<input type="text" id="telefono" name="telefono" value="{{ old('telefono', $empleado->telefono ?? '') }}"><br><br>

<label for="estado_civil">Estado Civil:</label>
<select id="estado_civil" name="estado_civil" required>
    <option value="" disabled selected>Seleccione una opción</option>
    <option value="soltero" {{ old('estado_civil', $empleado->estado_civil ?? '') == 'soltero' ? 'selected' : '' }}>Soltero</option>
    <option value="casado" {{ old('estado_civil', $empleado->estado_civil ?? '') == 'casado' ? 'selected' : '' }}>Casado</option>
    <option value="divorciado" {{ old('estado_civil', $empleado->estado_civil ?? '') == 'divorciado' ? 'selected' : '' }}>Divorciado</option>
    <option value="viudo" {{ old('estado_civil', $empleado->estado_civil ?? '') == 'viudo' ? 'selected' : '' }}>Viudo</option>
</select><br><br>

<label for="correo">Correo Electrónico:</label>
<input type="email" id="correo" name="correo" value="{{ old('correo', $empleado->correo ?? '') }}"><br><br>

<label for="contraseña">Contraseña:</label>
<input type="password" id="contraseña" name="contraseña" {{ !isset($empleado) ? 'required' : '' }}><br><br>

<label for="id_rol">Rol:</label>
<select id="id_rol" name="id_rol" required>
    <option value="" disabled selected>Seleccione un rol</option>
    @foreach ($roles as $rol)
        <option value="{{ $rol->id_rol }}" {{ old('id_rol', $empleado->id_rol ?? '') == $rol->id_rol ? 'selected' : '' }}>{{ $rol->nombre }}</option>
    @endforeach
</select><br><br>
