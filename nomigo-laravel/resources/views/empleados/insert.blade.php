<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Empleado</title>
    <!-- CDN para obtener una alerta con animación con la palomita de exito -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/empleado/form.css') }}">
</head>
<body>
    <h1>Insertar Empleado</h1>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: "{{ session('success') }}",
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('empleados.create') }}";
                }
            });
        </script>
    @endif

    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        @include('empleados.form')
        <button type="submit">Guardar</button>
    </form>
    <a class="redirecciones" href="{{ route('empleados.index') }}" class="btn-crear">Volver</a>
</body>
</html>
