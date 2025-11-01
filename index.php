<?php

require_once __DIR__ . '/vendor/autoload.php';
define('BASE_PATH', __DIR__);

use Dotenv\Dotenv;

// Cargar variables del entorno (.env)
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Cargar el archivo de rutas
$routes = require_once __DIR__ . '/app/Core/Routes.php';

// Obtener método HTTP (GET, POST, etc.)
$method = $_SERVER['REQUEST_METHOD'];

// Obtener la URI desde el navegador
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// ELIMINAR el prefijo del subdirectorio (por ejemplo: /vicar)
$basePath = '/vicar';
$uri = str_replace($basePath, '', $uri);

// Normalizar URI (si queda vacío, es la raíz)
if ($uri === '' || $uri === false) {
    $uri = '/';
}

// Buscar la ruta en la tabla
if (isset($routes[$method][$uri])) {
    [$controllerClass, $methodName] = $routes[$method][$uri];
    // Ejecutar controlador y método correspondiente
    $controller = new $controllerClass();
    $controller->$methodName();
} else {
    // Ruta no encontrada
    http_response_code(404);
    echo "<h1>404 - Página no encontrada</h1>";
}
