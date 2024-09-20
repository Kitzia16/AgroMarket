<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Iniciar sesión</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <?php
  // En la parte superior de la página, agrega el siguiente código para verificar si el usuario ha iniciado sesión
  session_start();

  // Verificar si el usuario ha iniciado sesión
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
      // Usuario ha iniciado sesión, puedes mostrar un mensaje de bienvenida
      header('Location: index,.php');
?>
      <!-- Enlace o botón para cerrar sesión -->
      <a href="logout.php" class="bordered-btn">CERRAR SESIÓN</a>
      <?php
      // Aquí puedes mostrar más información o funcionalidad del usuario
      // Por ejemplo, mostrar enlaces para cerrar sesión, acceso a perfiles, etc.
  } else {
      // Si el usuario no ha iniciado sesión, muestra el formulario de inicio de sesión
  ?>
    <h2>Iniciar sesión</h2>
    <div class="login-page">
        <div class="form">
        <form action="login.php" method="POST">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
      
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br><br>
            <button type="submit"  id="loginButton">inicia sesion</button> 
        <p class="message">No estas registrado? <a href="index1.html">CREAR CUENTA</a></p> 
        </form>
    </div>
  </div>
  <?php
  }
  ?>
</body>
</html>
