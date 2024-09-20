<?php
    // Verificar si el usuario ha iniciado sesión
    session_start();
    if (isset($_SESSION['nombre'])) {
        // Mostrar el nombre de usuario
        $nombre = $_SESSION['nombre'];
        echo '<li><a href="#"><i class="fa fa-user-o"></i> ' . $nombre . '</a></li>';
        echo '<li><a href="login.php"><i class="fa fa-sign-out"></i> Cerrar sesión</a></li>';
    } else {
        // Mostrar el enlace para iniciar sesión o registrarse
        echo '<li><a href="index."><i class="fa fa-user-o"></i> Mi Cuenta</a></li>';
    }
    ?>