<?php
// Conexión a la base de datos (debes ajustar los valores según tu configuración)
$servername = "localhost";
$username = "jesus";
$password = "123";
$dbname = "usuarios";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener los datos de la base de datos
$sql = "SELECT imagen,nombre,descripcion,precio,categoria,empresa  FROM productos";
$result = $conn->query($sql);

// Cerrar la conexión
$conn->close();

// Devolver los datos como JSON
$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
        'imagen'=> $row['imagen'],
        'nombre'= $row['nombre'],
        'descripcion'=$row['descripcion'],
        'precio' = $row['precio'],
        'categoria' = $row['categoria'],
        'empresa' = $row['empresa'];
    }
}

echo json_encode($data);
?>
