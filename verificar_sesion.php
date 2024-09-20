<?php
// Inicia la sesión para acceder a las variables de sesión
session_start();

// Variable para almacenar la respuesta que se enviará como JSON
$response = array();

if (isset($_SESSION['nombre'])) {
    // Si existe la variable de sesión 'usuario', significa que el usuario ha iniciado sesión
    // Obtén el nombre de usuario almacenado en la variable de sesión
    $nombre_usuario = $_SESSION['nombre'];

    // Agrega el nombre de usuario al array de respuesta
    $response['nombre'] = $nombre;
} else {
    // Si no existe la variable de sesión 'usuario', el usuario no ha iniciado sesión
    // En este caso, no es necesario agregar nada al array de respuesta, ya que por defecto será nulo
}

// Envía la respuesta como JSON al cliente
header('Content-Type: application/json');
echo json_encode($response);
?>
