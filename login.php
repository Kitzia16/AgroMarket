<?php
// Configuración de la base de datos
$servername = "localhost"; // Nombre del servidor de la base de datos
$username = "jesus"; // Nombre de usuario de la base de datos
$password = "123"; // Contraseña de la base de datos
$dbname = "usuarios"; // Nombre de la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

session_start();
$email = $_POST['email'];
$password = $_POST['contrasena'];

// Utilizar consulta preparada para prevenir SQL injection
$sql = "SELECT * FROM usu WHERE email = ? AND contrasena = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    
    // Verificar la contraseña utilizando password_verify()
    if (password_verify($_POST['contrasena'], $row['contrasena'])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['nombre'] = $row['nombre'];
        echo '<script>alert("'.$email.'")</script>';
        header('Location: profile.php');
        exit();
    }
} 

echo 'Error al iniciar sesión';

$stmt->close();
$conn->close();
?>
