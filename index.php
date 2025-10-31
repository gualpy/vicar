<?php

// 1. Cargar el Autoload de Composer
require __DIR__ . '/vendor/autoload.php';

// 2. Cargar las Variables de Entorno (Usando vlucas/phpdotenv)
try {
    // La clase Dotenv está en el namespace Vlucas\Dotenv
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
} catch (\Exception $e) {
    // Esto es útil para manejar el caso en que el archivo .env no exista (ej: en producción)
    // echo "Advertencia: Archivo .env no encontrado. Usando variables de entorno del sistema.";
}


// --- A PARTIR DE AQUÍ, TODAS LAS VARIABLES DEL .env ESTÁN EN EL ENTORNO GLOBAL ---

// 3. Inicializar el Router (Ejemplo)
use App\Core\Router;

$router = new Router();
$router->dispatch(); 
// El Router ejecutará un controlador, que a su vez usará la clase Database.