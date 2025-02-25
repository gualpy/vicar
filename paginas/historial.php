<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Verificamos si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.html"); 
    exit();
}

$usuario = $_SESSION['usuario'];

include 'conexion_be.php';

$query = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $query);

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transporte para Personas con Discapacidad</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/estilo.css">

</head>

<body>

    <!-- Cabecera -->
    <header>
        <div class="container">
            <center><img src="../assets/img/logo.png" alt="Logo de la empresa" width="100px" height="90px"></center>
            <h1>Transporte para Personas con Discapacidad</h1>
        </div>
    </header>
    
    <!-- Sección principal -->
    <section id="bienvenida">
        <center>
            <div class="container">
                <h2>Bienvenido al servicio de transporte accesible</h2>
                <p>Ofrecemos un servicio de transporte seguro, <br>
                    cómodo y adaptado para personas con discapacidad, <br>
                    utilizando vehículos modificados para garantizar la máxima accesibilidad.</p>
            </div>
        </center>
    </section>

    <!-- Servicios -->
    <section id="servicios">
        <div class="container">
            <h2>Servicios Disponibles</h2>
            <ul>
                <li>Transporte puerta a puerta</li>
                <li>Asistencia personal durante el viaje</li>
                <li>Vehículos adaptados con rampas y elevadores</li>
                <li>Servicio de acompañante si es necesario</li>
            </ul>
        </div>
    </section>

    <!-- Vehículos Modificados -->
    <section id="vehiculos">
        <style>
            .container {
                max-width: 800px;
                margin: 0 auto;
                padding: 0 20px;
            }
            .carousel {
                height: 400px;
                width: 500%;
                max-width: 500px;
                overflow: hidden;
                border: 0px solid #333;
                position: relative;
            }

            .carousel-container {
                display: flex;
                width: 300%;
                animation: slide 30s infinite linear;
            }

            .carousel img {
                width: 100%;
                height: 100px;
            }

            @keyframes slide {
                0% {
                    transform: translateX(0);
                }

                33% {
                    transform: translateX(-100%);
                }

                66% {
                    transform: translateX(-200%);
                }

                100% {
                    transform: translateX(0);
                }
            }
        </style>
        <center>
            <div class="container">
                <h2>Vehículos Modificados</h2>
                <p>Nuestros vehículos están equipados con rampas de <br>acceso, elevadores y espacios adaptados para sillas de ruedas, <br>
                    asegurando la comodidad y seguridad en cada traslado.</p>
                <div class="carousel">
                    <div class="carousel-container">
                        <img src="../assets/img/imagen1.jfif" alt="Imagen 1">
                        <img src="../assets/img/imagen2.jfif" alt="Imagen 2">
                        <img src="../assets/img/imagen3.jfif" alt="Imagen 3">
                        <img src="../assets/img/imagen4.jpg" alt="Imagen 4">
                        <img src="../assets/img/imagen5.jpg" alt="Imagen 4">

                    </div>
                </div>
            </div>
        </center>
    </section>

    <!-- Contacto -->
    <section id="contacto">
        <center>
            <div class="container">
                <h3>¿Nos recomendarías?</h3>
                <div id="form-container">
                    <form id="recomendacion-form">
                        <label for="recomendacion">Deja tus comentarios:</label>
                        <textarea id="recomendacion" name="recomendacion" placeholder="Escribe aquí tu recomendación..."></textarea>
                        <button type="submit">Enviar</button>
                    </form>
                    <div id="message" style="display:none;">Mensaje Enviado</div>
                </div>
            </div>
        </center>
    </section>

    <!-- Pie de página -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Transporte Accesible. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="../assets/js/script.js"></script>
</body>
</html>
<?php    include_once("menu.php");?>