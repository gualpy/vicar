<?php
function cerrar_sesion()
{
    session_start();
    session_destroy(); // Destruye la sesión
    header("Location:../inicio-sesion.html"); // Redirige a la página de login
    exit();
}
