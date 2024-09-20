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

// Obtener los datos del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];
$empresa = $_POST['empresa'];

// Obtener la información de la imagen
$imagen_nombre = $_FILES['imagen']['name'];
$imagen_tipo = $_FILES['imagen']['type'];
$imagen_tamano = $_FILES['imagen']['size'];
$imagen_tmp = $_FILES['imagen']['tmp_name'];

// Convertir la imagen en datos binarios
$imagen_contenido = addslashes(file_get_contents($imagen_tmp));

// Actualizar los datos en la base de datos
$sql = "UPDATE productos SET imagen_nombre = '$imagen_nombre', imagen_tipo = '$imagen_tipo', imagen_tamano = $imagen_tamano, imagen_contenido = '$imagen_contenido', nombre = '$nombre', descripcion = '$descripcion' ,categoria = '$categoria', precio = $precio, empresa = '$empresa' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Producto actualizado correctamente.";?><p><a href='welcome.php'>Regresar al inicio</a></p><?php
} else {
    echo "Error al actualizar el producto: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
