// Inicializa el mapa
function initMap() {
    const hospital1 = { lat: -2.190, lng: -79.951 }; // Coordenadas del Hospital del Niño
    const hospital2 = { lat: -2.192, lng: -79.947 }; // Coordenadas de Santa María
  
    const map = new google.maps.Map(document.getElementById("map"), {
      center: hospital1, 
      zoom: 15,
    });
  
    // Marca los hospitales
    const marker1 = new google.maps.Marker({
      position: hospital1,
      map: map,
      title: "Hospital del Niño"
    });
  
    const marker2 = new google.maps.Marker({
      position: hospital2,
      map: map,
      title: "Hospital Santa María"
    });
  
    // Define un círculo de 1.5 km alrededor de los hospitales
    const circle1 = new google.maps.Circle({
      map: map,
      center: hospital1,
      radius: 1500,
      strokeColor: "#FF0000",
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: "#FF0000",
      fillOpacity: 0.35
    });
  
    const circle2 = new google.maps.Circle({
      map: map,
      center: hospital2,
      radius: 1500,
      strokeColor: "#FF0000",
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: "#FF0000",
      fillOpacity: 0.35
    });
  }
  
  // Muestra el formulario de pago según el método seleccionado
  function showPaymentForm(paymentMethod) {
    // Ocultar todos los formularios
    document.querySelectorAll('.payment-form').forEach(form => form.style.display = 'none');
    
    if (paymentMethod === 'efectivo') {
      document.getElementById('efectivo-form').style.display = 'block';
      document.getElementById('thank-you-message').style.display = 'block';
    } else {
      document.getElementById(paymentMethod + '-form').style.display = 'block';
    }
  }
  
  // Muestra el mensaje de agradecimiento después de completar el formulario
  function showThankYou(paymentMethod) {
    document.getElementById('thank-you-message').style.display = 'block';
    setTimeout(() => {
      alert("Gracias por tu pago con " + paymentMethod);
    }, 1000);
  }
  