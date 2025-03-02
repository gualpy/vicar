<?php
$host="localhost";
$user="root";
$password="e0tki12j";
$db="login_register_db";


$conexion = mysqli_connect($host, $user, $password, $db);

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
