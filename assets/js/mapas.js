
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
