<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>productos</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicopng">
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

</head>
<body>
	
	<!--PreLoader-->

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
								<img src="assets/img/lopng" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="index.php">INICIO</a>
								
								</li>
								<li><a href="acerca de.html">ACERCA DE</a></li>
								<li><a href="#">CATEGORIAS</a>
									<ul class="sub-menu">
										<li><a href="Tomate.php">TOMATE</a></li>
										<li><a href="Frijol.php">FRIJOL</a></li>
										<li><a href="Trigo.php">TRIGO</a></li>
										<li><a href="Maiz.php">MAIZ</a></li>
										<li><a href="Alfalpa.php">ALFALPA</a></li>
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
						<p></p>
						<h1>Productos</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
        <div class="row product-lists">
<?php

$servername = "localhost"; // Reemplaza con el nombre de tu servidor MySQL
$username = "jesus"; // Reemplaza con tu nombre de usuario de MySQL
$password = "123"; // Reemplaza con tu contraseña de MySQL
$dbname = "usuarios"; // Reemplaza con el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['queried'])) {
    $search_query = $_GET['queried'];

    // Realiza la consulta en la base de datos para encontrar productos por nombre
    // Aquí debes ajustar la consulta según la estructura de tu base de datos

    // Ejemplo de consulta SQL
    $sql = "SELECT * FROM productos WHERE nombre LIKE '%$search_query%'";
    $result = mysqli_query($conn, $sql);

    // Muestra los resultados
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='col-lg-4 col-md-6 text-center'>";
        echo "<div class='single-product-item'>";
        echo "<div class='product-image'>";
        echo "<a href='single_product1.php?id=" . $row['id'] . "'><img src='data:" . $row['imagen_tipo'] . ";base64," . base64_encode($row['imagen_contenido']) . "' alt=''></a>";
        echo "</div>";
        echo "<h3>" . $row['nombre'] . "</h3>";
        echo "<p class='product-price'><span>Per Kg</span> " . $row['precio'] . "</p>";
        echo '<a href="single_product1.php?id=' . $row['id'] . '" class="cart-btn"><i class="fas fa-shopping-cart"></i> Ver productos</a>';
        echo '</div>';
        echo '</div>';
    }

    // Cierra la conexión a la base de datos
    
}
?></div>
        </div>
    </div>

	<!-- end products -->	
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
