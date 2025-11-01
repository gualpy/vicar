<?php

namespace App\Core;

class View
{
    public static function render($viewName, $data = [])
    {
        // Extrae las variables para que estén disponibles en la vista
        extract($data);

        // Convierte "usuario/registro" en "views/usuario/registro.php"
        $viewPath = __DIR__ . '/../../views/' . $viewName . '.php';

        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            echo "<h1>Vista no encontrada: $viewName</h1>";
        }
    }
}
