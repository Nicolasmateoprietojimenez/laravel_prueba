<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomigo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Asegúrate de tener este archivo CSS -->
</head>
<style>
    /* Estilos generales */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    margin: 0;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #2c3e50;
}

/* Estilos para el formulario */
form {
    background-color: #ffffff;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    max-width: 600px;
    margin: 0 auto;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="date"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="checkbox"] {
    margin-right: 10px;
}

button {
    background-color: #3498db;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #2980b9;
}

/* Estilos para la tabla */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}

th {
    background-color: #3498db;
    color: white;
}

tr:hover {
    background-color: #f1f1f1;
}

/* Botones de acción en la tabla */
.btn-editar, .btn-eliminar {
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 4px;
}

.btn-editar {
    background-color: #2ecc71;
    color: white;
}

.btn-editar:hover {
    background-color: #27ae60;
}

.btn-eliminar {
    background-color: #e74c3c;
    color: white;
}

.btn-eliminar:hover {
    background-color: #c0392b;
}

.redirecciones {
    display: block;
    margin-top: 20px;
    text-align: center;
    color: #3498db;
}
.acciones {
    display: flex;
    gap: 10px; /* Espacio entre los botones */
}

.btn-editar, .btn-eliminar {
    padding: 5px 10px;
    text-decoration: none;
}

.btn-editar {
    background-color: #4CAF50; /* Color para el botón editar */
    color: white;
    border: none;
    border-radius: 5px;
}

.btn-eliminar {
    background-color: #f44336; /* Color para el botón eliminar */
    color: white;
    border: none;
    border-radius: 5px;
}

</style>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
