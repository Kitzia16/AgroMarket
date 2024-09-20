<?php
// Establecer la conexión con la base de datos
$servername = "localhost";
$username = "jesus";
$password = "123";
$dbname = "usuarios";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recuperar los datos enviados desde el formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST["contrasena"];
$telefono = $_POST["telefono"];

// Consulta para verificar si el correo electrónico ya existe en la tabla de usuarios
$consulta = "SELECT email FROM usu WHERE email = '$email'";
$resultado = $conn->query($consulta);

// Verificar si la consulta se realizó con éxito
if ($resultado) {
    // Si el número de filas devueltas es mayor a 0, significa que el correo electrónico ya existe en la base de datos
    if ($resultado->num_rows > 0) {
        echo "El correo electrónico ya está registrado. Por favor, ingresa un correo electrónico diferente.";?><p><a href ='index1.html'>Regresar</a></p> <?php
    } else {
        // Realizar la consulta para insertar los datos en la base de datos
        $sql = "INSERT INTO usu (nombre, email, contrasena, telefono) VALUES ('$nombre', '$email', '$password', '$telefono')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro guardado correctamente. ¡Bienvenido!";?><p><a href ='index.php'>Regresar</a></p> <?php
        } else {
            echo "Error al registrarse: " . $conn->error;
        }
    }
} else {
    echo "Error en la consulta: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
