   <!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Mi cuenta</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/logng">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 5px;
        }

        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php">
								<img src="assets/img/logg" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li ><a href="index.php">INICIO</a>
								
								</li>
								<li><a href="acerca de.html">ACERCA DE</a></li>
								<li class="current-list-item"><a href="#">CATEGORIAS</a>
									<ul class="sub-menu">
										<li><a href="Tomate.php">TOMATE</a></li>
										<li><a href="Frijol.php">FRIJOL</a></li>
										<li><a href="Trigo.php">TRIGO</a></li>
										<li><a href="Maiz.php">MAÍZ</a></li>
										<li><a href="Alfalpa.php">ALFALFA</a></li>
										<li><a href="Chile.php">CHILE</a></li>
										<li><a href="Agave.php">AGAVE</a></li>
										
									</ul>
								</li>
							    <li><a href="shop.php">PRODUCTOS</a> </li>
									<ul class="sub-menu">
										
									</ul>
								</li>
								<li><a href="contact.html">CONTACTO</a></li>
								
									<ul class="sub-menu">
									
										<li><a href="checkout.html">Check Out</a></li>
										<li><a href="single-product.html">Single Product</a></li>
										<li><a href="cart.html">Cart</a></li>
									</ul>
								</li>
								<li>
							
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

		<!-- search area -->
		<div class="search-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<span class="close-btn"><i class="fas fa-window-close"></i></span>
						<div class="search-bar">
							<div class="search-bar-tablecell">
								<h3>Search For:</h3>
								<form action="ruta_del_archivo_php_que_realiza_la_busqueda.php" method="get">
                                <input type="text" name="queried" placeholder="Keywords">
                                <button type="submit">Search <i class="fas fa-search"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end search arewa -->
		<!-- breadcrumb-section -->
		<div class="breadcrumb-section breadcrumb-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 text-center">
						<div class="breadcrumb-text">
							<p>Bienvenido</p>
							<h1>Administrador</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end breadcrumb section -->
		<!-- error section -->
		
        <div class="contact-from-section mt-150 mb-150">
			
			<div class="row">
		<div class="container">
			<a href="index4.html" class="boxed-btn">Registrar Producto</a>
            <a href="logout.php" class="boxed-btn">CERRAR SESIÓN</a><br>
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
								
                               
                                
                                <?php

                                $servername = "localhost"; // Reemplaza con el nombre de tu servidor MySQL
                                $username = "jesus"; // Reemplaza con tu nombre de usuario de MySQL
                                $password = "123"; // Reemplaza con tu contraseña de MySQL
                                $dbname = "usuarios"; // Reemplaza con el nombre de tu base de datos
                                
                                // Crear una nueva conexión a la base de datos
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                
                                // Verificar la conexión
                                if ($conn->connect_error) {
                                    die("Conexión fallida: " . $conn->connect_error);
                                }
                                
                                // Manejo del formulario de inserción
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $empresa = $_POST['empresa'];

    // Obtener la información de la imagen
    $imagen_nombre = $_FILES['imagen']['name'];
    $imagen_tipo = $_FILES['imagen']['type'];
    $imagen_tamano = $_FILES['imagen']['size'];
    $imagen_tmp = $_FILES['imagen']['tmp_name'];

    // Validar y mover la imagen al servidor
    if (move_uploaded_file($imagen_tmp, 'uploads/' . $imagen_nombre)) {
        // Insertar los datos en la base de datos usando sentencias preparadas
        $sql = "INSERT INTO productos (imagen_nombre, imagen_tipo, imagen_tamano, imagen_contenido, nombre, categoria, precio, empresa) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param(
            "ssisssds",
            $imagen_nombre,
            $imagen_tipo,
            $imagen_tamano,
            file_get_contents($imagen_tmp),
            $nombre,
            $categoria,
            $precio,
            $empresa
        );

        if ($stmt->execute()) {
            echo '<script languaje="javascript">alert("Producto guardado correctamente");</script>';
        } else {
            error_log("Error en la consulta SQL: " . $stmt->error);
            echo '<script languaje="javascript">alert("No se pudo guardar el producto");</script>';
        }

        $stmt->close();
    } else {
        echo '<script languaje="javascript">alert("Error al cargar la imagen");</script>';
    }
}

// Obtener todos los productos de la base de datos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

$conn->close();
?>
<?php
                                
// Mostrar la tabla de productos
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>id</th><th>Imagen</th><th>Nombre del producto</th><th>Categoría</th><th>Precio</th><th>Nombre de la empresa</th><th>Acciones</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td><img src='uploads/" . $row['imagen_nombre'] . "'></td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['categoria'] . "</td>";
        echo "<td>" . $row['precio'] . "</td>";
        echo "<td>" . $row['empresa'] . "</td>";
        echo "<td>";
        echo "<a href='editar_producto.php?id=" . $row['id'] . "'>Editar</a> ";
        echo "<a href='eliminar_producto.php?id=" . $row['id'] . "'>Eliminar</a> ";
       // echo "<a href='single_product.php?id=" . $row['id'] . "'>Ver detalles</a>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo '<script languaje="javascript">alert("No se encontró ningún producto en la base de datos");</script>';
}
?>
							</div>
                            
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end error section -->
	
		<!-- footer -->
		<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">MISIÓN</h2>
						<p>Impulsar el desarrollo económico en toda la región sureste del Estado de Durango.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">INFORMACIÓN</h2>
						<ul>
							<li>Matamoros #115 Vicente Guerrero Dgo.</li>
							<li>agro.com.dgo@gmail.com</li>
							<li>+52 667-820-46-04</li>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
				
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">CONTACTANOS</h2>
						<p>Si deseas registra tu negocio contactanos</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p><a href="https://imransdesign.com/">AGROMARKET</a><br><a href="https://themewagon.com/"></a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="https://www.facebook.com/profile.php?id=100095297161211&mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/Agro_com_Dgo" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://instagram.com/agro.com_dgo?igshid=MzNlNGNkZWQ4Mg==" target="_blank"><i class="fab fa-instagram"></i></a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>
	
	</body>
</html>
 
