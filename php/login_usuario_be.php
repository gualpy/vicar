<?php

session_start();

include '../paginas/conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo= '$correo' 
and contrasena='$contrasena'");

if(mysqli_num_rows($validar_login)>0 ){
    $_SESSION ['usuario'] = $correo;
    
    echo '
    <script>
        alert("Bienvenido");
        window.location = "../paginas/transporte.php";
    </script>';

}
else{
    echo '
    <script>
        alert("Correo o contraseña incorrectos");
        window.location = "../index.html";
    </script>
';
}
