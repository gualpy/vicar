<?php
session_start();

// Verificamos si el usuario está autenticado
// if (!isset($_SESSION['usuario'])) {
//   header("Location: ../index.html"); // Redirige al login si no está autenticado
//   exit();
// }

$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Ubicación, Destino y Pago</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/estilo.css">

</head>

<body>

  <div class="container">
    <div class="banner">
      <!-- Sección de Ubicación -->

      <div class="section" id="ubicacion">
        <h2>Ubicación del Cliente</h2>
        <label for="ubicacion-select">Ingresatu dirrección:</label>
        <form id="direccion-form">
          <label for="direccion">Dirección:</label>
          <input type="text" id="direccion" name="direccion" placeholder="Ej. Av. Quito 123" required>

          <label for="av">Avenida:</label>
          <input type="text" id="av" name="av" placeholder="Ej. Av. 9 de Octubre" required>

          <label for="calle">Calle:</label>
          <input type="text" id="calle" name="calle" placeholder="Ej. Calle F1" required>

          <label for="descripcion">Descripción de la Casa (opcional):</label>
          <textarea id="descripcion" name="descripcion" rows="4" placeholder="Ej. Casa color verde, puerta azul..."></textarea>

          <button class="btn-pago" type="submit">Enviar</button>


        </form>
        <script>
          // Este código es solo para manejar la acción de enviar el formulario
          document.getElementById('direccion-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Evita que la página se recargue
            alert('Dirección ingresada correctamente.');
          });
        </script>
      </div>
      <!-- Sección de Destino (Mapa) -->
      <div class="section" id="destino">
        <h2>Destino a Llegar</h2>
        <div id="map" style="width: 100%; height: 300px;">
          <select id="ubicacion-select">
            <option value="select">Seleccionar</option>
            <option value="hospital-del-nino">Hospital del Niño</option>
            <option value="medilink-sur">Medilink Sur</option>
            <option value="semedic">Semedic</option>
          </select>
        </div>
      </div>
      <script>
        // Asignar los iframes de Google Maps a las diferentes opciones
        const mapIframe = {
          'hospital-del-nino': '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.8682952991894!2d-79.89595882579376!3d-2.2034372373147013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6e6c71738b19%3A0x886619880eff2130!2sHospital%20del%20Ni%C3%B1o%2C%20Dr.%20Francisco%20de%20Icaza%20Bustamante!5e0!3m2!1ses-419!2sec!4v1738687817578!5m2!1ses-419!2sec" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
          'medilink-sur': '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.8475393624767!2d-79.89339722579368!3d-2.2111761373348204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6e3fe51e6327%3A0xaeffe2462d95d4aa!2sCentro%20m%C3%A9dico%20medilink%20Sur!5e0!3m2!1ses-419!2sec!4v1738687684821!5m2!1ses-419!2sec" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
          'semedic': '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.8451968819677!2d-79.8920484257937!3d-2.2120478373370918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6f00717acff1%3A0x50c61d9a2aee9e9e!2sSEMEDIC!5e0!3m2!1ses-419!2sec!4v1738687767976!5m2!1ses-419!2sec" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        };

        // Función que cambia el iframe del mapa cuando el usuario selecciona una zona
        document.getElementById('ubicacion-select').addEventListener('change', function() {
          const selectedOption = this.value; // Obtener la opción seleccionada
          const mapContainer = document.getElementById('map'); // Obtener el contenedor del mapa

          // Asignar el iframe correspondiente al contenedor
          mapContainer.innerHTML = mapIframe[selectedOption] || ''; // En caso de no encontrar una opción, no cargar nada
        });
      </script>

      <div class="section" id="pago">

        <h2>Método de Pago</h2>
        <button class="btn-pago" onclick="openPaymentWindow()">Crédito/Debito</button>
        <button class="btn-pago" onclick="openPaypalWindow()">PayPal</button>
        <button class="btn-pago" onclick="showPaymentForm('efectivo')">Efectivo</button>


      </div>
      <script>
        function showPaymentForm() {
          alert("Valor a cancelar cuando este en transporte. Gracias");
        }

        function openPaypalWindow() {
          window.open('paypal.html', 'Pago', 'width=600,height=600');
        }

        function openPaymentWindow() {
          window.open('pagos.html', 'Pago', 'width=600,height=600');
        }
      </script>

      <!-- Formularios de Pago (Inicialmente ocultos) -->
      <div id="credito-form" class="payment-form" style="display: none;">
        <h3>Pago con Crédito</h3>
        <form onsubmit="showThankYou('Credito'); return false;">
          <input type="text" placeholder="Número de tarjeta" required />
          <input type="text" placeholder="Fecha de expiración" required />
          <input type="text" placeholder="CVV" required />
          <button class="btn-pago" type="submit">Pagar</button>
        </form>
      </div>
      <div id="debito-form" class="payment-form" style="display: none;">
        <h3>Pago con Débito</h3>
        <form onsubmit="showThankYou('Débito'); return false;">
          <input type="text" placeholder="Número de tarjeta" required />
          <input type="text" placeholder="Fecha de expiración" required />
          <input type="text" placeholder="CVV" required />
          <button class="btn-pago" type="submit">Pagar</button>
        </form>
      </div>
      <div id="paypal-form" class="payment-form" style="display: none;">
        <h3>Pago con PayPal</h3>
        <form onsubmit="showThankYou('PayPal'); return false;">
          <input type="email" placeholder="Correo electrónico de PayPal" required />
          <button class="btn-pago" type="submit">Pagar</button>
        </form>
      </div>
      <div id="efectivo-form" class="payment-form" style="display: none;">
        <h3>Gracias por tu compra</h3>
      </div>
    </div>
  </div>

  <div id="thank-you-message" style="display: none; text-align: center;">
    <h3>¡Gracias por tu compra!</h3>
  </div>

  <script src=<?php "assets/js/script.js" ?>></script>
</body>

</html>

<?php
include_once("menu.php");