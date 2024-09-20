<!DOCTYPE html>
<html>
<head>
    <title>Comercializadora de Productos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    /* Estilos generales */
body {
    font-family: 'Poppins', sans-serif;
    background-color: #f4f4f9;
    color: #333;
    margin: 0;
    padding: 0;
}

header {
    background-color: #6a1b9a;
    padding: 10px 20px;
    color: white;
    text-align: center;
}

header nav a {
    color: white;
    margin: 0 15px;
    text-decoration: none;
    font-size: 1.2rem;
}

header nav a:hover {
    color: #d1c4e9;
}

/* Contenedor general */
main {
    margin: 20px auto;
    max-width: 1200px;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

main:hover {
    transform: scale(1.02);
}

h1 {
    color: #6a1b9a;
    text-align: center;
}

/* Estilo para formularios */
form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

label {
    font-weight: bold;
    color: #333;
}

input, textarea {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
}

input:focus, textarea:focus {
    outline: none;
    border-color: #6a1b9a;
}

button {
    padding: 10px;
    background-color: #6a1b9a;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease-in-out;
}

button:hover {
    background-color: #ab47bc;
}

a {
    text-decoration: none;
    color: #6a1b9a;
    transition: color 0.3s ease-in-out;
}

a:hover {
    color: #ab47bc;
}

/* Tablas */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
    text-align: left;
    padding: 12px;
}

th {
    background-color: #6a1b9a;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Animación para mensajes */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

div.alert {
    padding: 15px;
    background-color: #4caf50;
    color: white;
    margin-bottom: 20px;
    border-radius: 5px;
    animation: fadeIn 0.5s ease-in-out;
}

div.alert-error {
    background-color: #f44336;
}

/* Footer */
footer {
    background-color: #6a1b9a;
    color: white;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    width: 100%;
    bottom: 0;
}

</style>
<body>
    <header>
        <nav>
            <a href="{{ route('productos.index') }}">Inicio</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Comercializadora de Productos Tecnológicos</p>
    </footer>
</body>
</html>
