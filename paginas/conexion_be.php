<?php

$conexion = mysqli_connect("localhost", "root", "e0tki12j", "login_register_db");

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
