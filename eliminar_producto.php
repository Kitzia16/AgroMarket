<?php
$servername = "localhost"; // Reemplaza con el nombre de tu servidor MySQL
$username = "jesus"; // Reemplaza con tu nombre de usuario de MySQL
$password = "123"; // Reemplaza con tu contraseña de MySQL
$dbname = "usuarios"; // Reemplaza con el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el ID del producto a eliminar
$id = $_GET['id'];

// Eliminar el producto de la base de datos
$sql = "DELETE FROM productos WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Producto eliminado correctamente.";?><p><a href ='welcome.php'>Regresar</a></p> <?php
} else {
    echo "Error al eliminar el producto: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
