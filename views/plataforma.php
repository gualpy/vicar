
<?php
session_start();

// Verificamos si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.html"); // Redirige al login si no está autenticado
    exit();
}

$usuario = $_SESSION['usuario'];
?>



<!DOCTYPE html>
<html lang="es">
<style>

  
    </style>

<head>

    <title>Document</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
    

</head>

<body>

    <div>
        <div id="sidebar" class="active">
        <h4>Hola :
            <?php echo htmlspecialchars($usuario); ?>
        </h4>    
        <h2>Opciones :</h2>
        
            <a href="paginas/transporte.php">Pedir Transporte</a>
            <a href="paginas/historial.php">Acerca de nosotros</a>
            <a href="paginas/cerrar_sesion.php">Cerrar sesión</a>
           
        </div>
    </div>

   
</body>

</html>