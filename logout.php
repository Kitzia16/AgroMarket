<?php
session_start();

// Destruir la sesión y eliminar todas las variables de sesión
session_unset();
session_destroy();

// Redireccionar al formulario de inicio de sesión o a otra página
header('Location: index.php');
exit();

setcookie('session', '', time() - 3600, '/');
?>
