<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "jesus";
$password = "123";
$dbname = "usuarios";

// Obtener los datos del formulario
$Destinatario = $_POST['Destinatario'];
$cc_to = $_POST['cc_to'];

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Preparar y ejecutar la consulta SQL para insertar los datos en la tabla
$stmt = $conn->prepare("INSERT INTO correo (destinatario, cc_to) VALUES (?, ?)");
$stmt->bind_param("ss", $Destinatario, $cc_to);

if ($stmt->execute()) {
    echo "Datos almacenados correctamente en la base de datos.";
} else {
    echo "Error al almacenar los datos: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
