<?php
// Verificar la sesión del usuario
session_start();

if (!isset($_SESSION['email'])) {
    // Si el usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
    header("Location: login.php");
    exit();
}

// Conexión a la base de datos
$servername = "localhost"; // Nombre del servidor de la base de datos
$username = "jesus"; // Nombre de usuario de la base de datos
$password = "123"; // Contraseña de la base de datos
$dbname = "usuarios"; // Nombre de la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para obtener los productos del usuario actual
$emailUsuario = $_SESSION['email'];
$sql = "SELECT * FROM productos WHERE empresa = '$emailUsuario'";
$result = $conn->query($sql);

// Mostrar formulario de agregar producto
?>
<form action="" method="post" enctype="multipart/form-data">
    <label for="nombre">Nombre del producto:</label>
    <input type="text" name="nombre" required><br>

    <label for="categoria">Categoría:</label>
    <input type="text" name="categoria" required><br>

    <label for="precio">Precio:</label>
    <input type="number" name="precio" required><br>

    <label for="empresa">Nombre de la empresa:</label>
    <input type="text" name="empresa" value="<?= $emailUsuario ?>" readonly required><br>

    <label for="imagen">Imagen:</label>
    <input type="file" name="imagen" required><br>

    <input type="submit" value="Agregar producto">
</form>

<?php
// Mostrar productos del usuario
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Nombre del producto: " . $row['nombre'] . "<br>";
        echo "Categoría: " . $row['categoria'] . "<br>";
        echo "Precio: $" . $row['precio'] . "<br>";
        echo "Nombre de la empresa: " . $row['empresa'] . "<br>";
        echo "<img src='uploads/" . $row['imagen_nombre'] . "'><br>";
        echo "<hr>";
    }
} else {
    echo "No hay productos registrados por este usuario.";
}

$conn->close();
?>
