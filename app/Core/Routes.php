<?php

use App\Controllers\LoginController; // Asumiendo que el login es la página principal
use App\Controllers\UsuarioController;

return [
    'GET' => [
        '/'          => [LoginController::class, 'login'],
        '/login'          => [LoginController::class, 'login'],
        '/registro'  => [LoginController::class, 'mostrarRegistro'],
        // ... otras rutas GET
    ],
    'POST' => [
        '/registrar'  => [UsuarioController::class, 'registrar'],
        '/login'     => [LoginController::class, 'autenticar'],
        // ... otras rutas POST
    ],
];
