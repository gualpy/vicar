// Seleccionar el menú lateral y el área de hover
const sidebar = document.getElementById("sidebar");
const hoverArea = document.createElement("div");
hoverArea.classList.add("hover-area");
document.body.appendChild(hoverArea);

// Mostrar el menú al pasar el cursor cerca del borde izquierdo
hoverArea.addEventListener("mouseenter", () => {
    sidebar.classList.add("active");
});

// Ocultar el menú al quitar el cursor
sidebar.addEventListener("mouseleave", () => {
    sidebar.classList.remove("active");
});
// Función para alternar el menú
function toggleMenu() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("active");
}

// Añadir evento al botón de tres puntos
document.getElementById("menuButton").addEventListener("click", toggleMenu);

/*formulario de enviar comentarios*/ 
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('recomendacion-form');
    const message = document.getElementById('message');
    const formContainer = document.getElementById('form-container');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar que el formulario se envíe realmente

        // Desaparecer el formulario
        form.style.display = 'none';

        // Mostrar mensaje de "Mensaje Enviado"
        message.style.display = 'block';
        alert("Mensaje Enviado correctamente.")

        // Esperar 5 segundos antes de reiniciar el formulario
        setTimeout(() => {
            // Volver a mostrar el formulario limpio
            form.style.display = 'block';
            form.reset();  // Limpiar el formulario

            // Ocultar el mensaje de "Mensaje Enviado"
            message.style.display = 'none';
        }, 5000); // 5000ms = 5 segundos
    });
});
