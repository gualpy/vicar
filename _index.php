<?php

namespace App\Controllers\login;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <header>
        <div>
            <img src="assets/img/logo.png" alt="Logo de la empresa">
        </div>
        <h1>Transporte Accesible</h1>
        <div class="buttons">
            <a href="registro.html"><button>Registro</button></a>
        </div>
    </header>
    <h1>Iniciar Sesión</h1>
    <form action="app/Controllers/LoginController.php" method="post">
        <label for="email">Correo Electrónico:</label>
        <input type="text" id="email" name="correo" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="contrasena" required>

        <button type="submit">Iniciar Sesión</button>
    </form>
</body>

</html>