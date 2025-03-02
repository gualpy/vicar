<?php
?>





<button class="button-siderbar" id="menuButton">☰</button>
<div id="sidebar" class="active"><br><br>
    <h4>Usuario : <?php echo htmlspecialchars($usuario); ?></h4>
    <h3>Pedir Transporte</h3>
    <ul>
        <li><a href="historial.php">Sobre nosotros</a></li><br>
        <li><a href="cerrar_sesion.php">Cerrar sesión</a></li>
    </ul>
</div>
</body>
<script>
    document.getElementById("menuButton").addEventListener("click", function() {
        document.getElementById("sidebar").classList.toggle("active");
    });
</script>