<?php

namespace App\Controllers;

include 'conexion_be.php';
class UsuarioController
{
    public function home(){
        include '../views/inicio-sesion.html';
    }
    public function crud()
    {
        // Implement CRUD logic here
    }

    public function create()
    {
        // Implement create logic here
        function registroUsuario()
{

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $contrasena = $_POST['contrasena'];

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

    if (mysqli_num_rows($verificar_correo) > 0) {
        echo '
        <script>
        alert("Correo ya registrado");
        window.location = "../registro.html";
        </script>
        ';
    }

    $verificar_telefono = mysqli_query($conexion, "SELECT * FROM usuarios WHERE telefono = '$telefono'");

    if (mysqli_num_rows($verificar_telefono) > 0) {
        echo '
        <script>
            alert("Numero de telefono ya registrado");
            window.location = "../registro.html";
            </script>
            ';
    } else {
        $query = "INSERT INTO usuarios (nombre, correo, telefono, contrasena) 
              VALUES ('$nombre_completo', '$correo', '$telefono', '$contrasena')";

        $ejecutar = mysqli_query($conexion, $query);

        if ($ejecutar) {
            echo '
    <script>
    alert("Registro exitoso");
    window.location = "../inicio-sesion.html";
    </script>
    ';
        } else {
            echo '
    <script>
                alert("Algo salió mal :c");
                window.location = "../registro.html";
            </script>
        ';
        }
    }
}

    }

    public function update()
    {
        // Implement update logic here
    }

    public function delete()
    {
        // Implement delete logic here
    }
    public function login()
    {
        // Implement login logic here
    }

    public function logout()
    {
        // Implement logout logic here
    }
    mysqli_close($conexion);
}