<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script> 
        $(document).ready(function () {
            // Función para cargar y mostrar los productos
            function displayProducts() {
                $.ajax({
                    url: "get_data.php", // URL del script en el servidor que obtiene los productos de la base de datos
                    method: "GET",
                    success: function (data) {
                        // 'data' debe ser un array de objetos de productos obtenidos de la base de datos
                        var productList = $("#product-list");
                        productList.empty(); // Limpiar la lista de productos existente

                        // Recorrer los productos y agregarlos a la lista
                        $.each(data, function (index, product) {
                            productList.append(
                                "<div class='product'>" +
                                "<h3>" + product.nombre + "</h3>" +
                                "<p>Precio: $" + product.precio + "</p>" +
                                "</div>"
                            );
                        });
                    },
                    error: function (error) {
                        console.log("Error al obtener los productos: ", error);
                    }
                });
            }

            // Llamar a la función para cargar y mostrar los productos inicialmente
            displayProducts();
        });
    </script>

	<!-- title -->
	<title>Single Product</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favipng">
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
							<a href="index.html">
								<img src="assets/img/l.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="#">Home</a>
									<ul class="sub-menu">
										<li><a href="index.html">Static Home</a></li>
										<li><a href="index_2.html">Slider Home</a></li>
									</ul>
								</li>
								<li><a href="about.html">About</a></li>
								<li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="404.html">404 page</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Check Out</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="news.html">News</a></li>
										<li><a href="shop.html">Shop</a></li>
									</ul>
								</li>
								<li><a href="news.html">News</a>
									<ul class="sub-menu">
										<li><a href="news.html">News</a></li>
										<li><a href="single-news.html">Single News</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="shop.html">Shop</a>
									<ul class="sub-menu">
										<li><a href="shop.html">Shop</a></li>
										<li><a href="checkout.html">Check Out</a></li>
										<li><a href="single-product.html">Single Product</a></li>
										<li><a href="cart.html">Cart</a></li>
									</ul>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
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
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
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
						<p>See more Details</p>
						<h1>Single Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<!-- single product -->
    <div class="row product-lists" id="product-list">
<div class="single-product mt-150 mb-150">
        <div class="container">
            <?php

$servername = "localhost"; // Reemplaza con el nombre de tu servidor MySQL
$username = "jesus"; // Reemplaza con tu nombre de usuario de MySQL
$password = "123"; // Reemplaza con tu contraseña de MySQL
$dbname = "usuarios"; // Reemplaza con el nombre de tu base de datos

            // Obtener la ID del producto desde la URL
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                $product_id = $_GET['id'];

                // Crear una nueva conexión a la base de datos
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Verificar la conexión
                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                // Consultar la base de datos para obtener los detalles del producto
                $sql = "SELECT * FROM productos WHERE id = $product_id";
                $result = $conn->query($sql);

                if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    ?>
                    <div class="row">
                        <div class="col-md-5">
                            <form action='get_data.php'>
                            <div class="single-product-img">
                                <img src="data:<?php echo $row['imagen_tipo']; ?>;base64,<?php echo base64_encode($row['imagen_contenido']); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="single-product-content">
                                <h3><?php echo $row['nombre']; ?></h3>
                                <p><?php echo $row['descripcion']; ?></p>
                                <div class="single-product-form">
                                    <!-- Puedes agregar más detalles del producto aquí -->
                                    <p><strong>Categoría:</strong> <?php echo $row['categoria']; ?></p>
                                    <p><strong>Precio:</strong> $<?php echo $row['precio']; ?></p>
                                    <p><strong>Nombre de la empresa:</strong> <?php echo $row['empresa']; ?></p>
                                </div>
                                <h4>Share:</h4>
                                <ul class="product-share">
                                    <!-- Puedes agregar enlaces para compartir el producto en redes sociales aquí -->
                                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </form>
                            </div>
                        </div>
                    </div>
                <?php
                } else {
                    // No se encontró el producto en la base de datos
                    echo '<div class="row"><div class="col-lg-12 text-center"><p>No se encontró el producto en la base de datos.</p></div></div>';
                }

                // Cerrar la conexión a la base de datos
                $conn->close();
            } else {
                // Si no se proporcionó una ID válida en la URL
                echo '<div class="row"><div class="col-lg-12 text-center"><p>ID de producto inválida.</p></div></div>';
            }
            ?>
        </div>
        </div>
    </div>
	<!-- end single product -->

	<!-- more products -->
	<div class="more-products mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Related</span> Products</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products/product-img-1.jpg" alt=""></a>
						</div>
						<h3>Strawberry</h3>
						<p class="product-price"><span>Per Kg</span> 85$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products/product-img-2.jpg" alt=""></a>
						</div>
						<h3>Berry</h3>
						<p class="product-price"><span>Per Kg</span> 70$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products/product-img-3.jpg" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end more products -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>support@fruitkha.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Shop</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
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
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
						Distributed By - <a href="https://themewagon.com/">Themewagon</a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
    <script>
       $(document).ready(function () {
        // Function to fetch and display products
        function displayProducts() {
            $.ajax({
                url: "get_data.php", // Ruta del archivo PHP para obtener los productos de la base de datos
                method: "GET",
                success: function (data) {
                    // 'data' debe ser un array de objetos de producto obtenidos de la base de datos
                    var productList = $("#product-list");
                    productList.empty(); // Limpiar la lista de productos existente

                    // Recorre los productos y agrégales al listado
                    $.each(data, function (index, product) {
                        productList.append(
                            "<div class='col-lg-4 col-md-6 text-center'>" +
                            "<div class='single-product-item'>" +
                            "<div class='product-image'>" +
                            "<a href='single-producto.php'><img src='" + product.imagen_nombre + "' alt=''></a>" +
                            "</div>" +
                            "<h3>" + product.nombre + "</h3>" +
                            "<p class='product-price'><span>Per Kg</span> $" + product.precio + "</p>" +
                            "<a href='single-product.php' class='cart-btn'><i class='fas fa-shopping-cart'></i> Add to Cart</a>" +
                            "</div>" +
                            "</div>"
                        );
                    });
                },
                error: function (error) {
                    console.log("Error fetching products: ", error);
                }
            });
        }

        // Llama a la función displayProducts para inicialmente poblar la lista de productos
        displayProducts();

        // Función para guardar un nuevo producto en la base de datos
        $("#add-product-form").submit(function (event) {
            event.preventDefault();

            // Extrae los datos del formulario
            var productName = $("#product-name").val();
            var productPrice = $("#product-price").val();
            var productDescription = $("#product-description").val();

            // Envía los datos del formulario al servidor para agregar el nuevo producto a la base de datos
            $.ajax({
                url: "guardar_producto.php", // Ruta del archivo PHP para guardar el producto en la base de datos
                method: "POST",
                data: {
                    nombre: productName,
                    precio: productPrice,
                    descripcion: productDescription
                },
                success: function () {
                    // Después de agregar exitosamente el producto, actualiza la lista de productos
                    displayProducts();
                    // Limpia los campos del formulario después de una presentación exitosa
                    $("#product-name").val("");
                    $("#product-price").val("");
                    $("#product-description").val("");
                },
                error: function (error) {
                    console.log("Error adding product: ", error);
                }
            });
        });
    });
</script>

	
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