<?php

namespace App\Controllers;

error_reporting(E_ALL);
ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');

include_once '../../config/conexion.php';

class Login
{
    private $correo;
    private $contrasena;

    public function __construct($correo, $contrasena)
    {
        $this->correo = $correo;
        $this->contrasena = $contrasena;
    }

    public function login()
    {
        $conexion = new Conexion();
        $correo = $conexion->getConexion()->real_escape_string($this->correo);
        $contrasena = $conexion->getConexion()->real_escape_string($this->contrasena);
        $validar_login = mysqli_query($conexion->getConexion(), "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'");

        if (mysqli_num_rows($validar_login) > 0) {
            session_start();
            $_SESSION['usuario'] = $this->correo;
            echo '
            <script>
                alert("Bienvenido");
                window.location = "../../views/transporte.php";
            </script>';
        } else {
            echo '
            <script>
                alert("Correo o contraseña incorrectos");
                window.location = "../../index.html";
            </script>';
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $login = new Login($correo, $contrasena);
    $login->login();
}
