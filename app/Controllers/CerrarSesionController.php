<?php
session_start();
session_destroy(); // Destruye la sesión
header("Location:../index.html"); // Redirige a la página de login
exit();
?>
