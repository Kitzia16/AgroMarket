<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- title -->
	<title>AGROMARKET</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/log">
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
							<a href="index.php">
								<img src="assets/img/lopng" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="">INICIO</a>
								
								</li>
								<li><a href="acerca de.html">ACERCA DE</a></li>
								<li><a href="#">CATEGORÍAS</a>
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
								<li><a href="admin.html">ADMINISTRADOR</a></li>
									<ul class="sub-menu">
									
										
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
                            <!-- Formulario de búsqueda -->
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
	<!-- end search area -->

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							 <p class="subtitle">PRODUCTOS DE LA MEJOR CALIDAD</p>
							<h1>AGROMARKET</h1>
							<div class="hero-btns">
								
								<!-- menu start
<><a href="index1.html" class="bordered-btn">REGISTRARSE</a></li>
<><a href="index3.php" class="bordered-btn">INICIAR SESION</a></li> -->

						<!-- menu end -->
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->



	<!-- product section -->
	<div class="product-section mt-150 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="section-title">
					<h3><span class="orange-text"></span> Productos</h3>
					<p>Gran variedad de productos con la mejor calidad y con el mejor precio</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6 text-center">
				<div class="single-product-item">
					<div class="product-image">
						<a href="ALFALPA.php"><img src="assets/img/alfalfa12.jpg" height="200" alt="Alfalfa"></a>
					</div>
					<h3>Alfalfa</h3>
					<p class="product-price1">Fresca</p>
					<a href="ALFALPA.php" class="cart-btn">VER PRODUCTOS</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 text-center">
				<div class="single-product-item">
					<div class="product-image">
						<a href="Trigo.php"><img src="assets/img/trigo.png" height="200" alt="Trigo"></a>
					</div>
					<h3>Trigo</h3>
					<p class="product-price1">Trigo</p>
					<a href="Trigo.php" class="cart-btn">VER PRODUCTOS</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 text-center">
				<div class="single-product-item">
					<div class="product-image">
						<a href="Chile.php"><img src="assets/img/chile.avif" height="175" alt="Chile"></a>
					</div>
					<h3>Chile</h3>
					<p class="product-price1">Jalapeño, poblano, serrano, chilaca, güero, de árbol</p>
					<a href="Chile.php" class="cart-btn">VER PRODUCTOS</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6 text-center">
				<div class="single-product-item">
					<div class="product-image">
						<a href="Agave.php"><img src="assets/img/agave.jpg" height="200" alt="Agave"></a>
					</div>
					<h3>Agave</h3>
					<p class="product-price1">Agave</p>
					<a href="Agave.php" class="cart-btn">VER PRODUCTOS</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 text-center">
				<div class="single-product-item">
					<div class="product-image">
						<a href="Maiz.php"><img src="assets/img/maiz1.jpg" height="200" alt="Maíz"></a>
					</div>
					<h3>Maíz</h3>
					<p class="product-price1">Morado, amarillo, criollo</p>
					<a href="Maiz.php" class="cart-btn">VER PRODUCTOS</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 text-center">
				<div class="single-product-item">
					<div class="product-image">
						<a href="Frijol.php"><img src="assets/img/frijoles.jpg" height="200" alt="Frijol"></a>
					</div>
					<h3>Frijol</h3>
					<p class="product-price1">Pinto, negro, alubia</p>
					<a href="Frijol.php" class="cart-btn">VER PRODUCTOS</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 text-center">
				<div class="single-product-item">
					<div class="product-image">
						<a href="Tomate.php"><img src="assets/img/tomate.jpg" height="200" alt="Tomate"></a>
					</div>
					<h3>Tomate</h3>
					<p class="product-price1">Tomate</p>
					<a href="Tomate.php" class="cart-btn">VER PRODUCTOS</a>
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- end product section -->

	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<video  height="400px" width="700px" controls="" autoplay=""  muted="" loop="">
							<source src="assets/img/tractor.mp4" type="video/mp4">
						</video>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						
						<h2>AGROMARKET<span class="orange-text"></span></h2>
						<p>México cuenta con 32.4 millones de hectáreas destinadas a la cosecha, de acuerdo con la Encuesta nacional y agropecuaria (ENA,2017), de las cuales el 21% cuentan con riego y el 79% restante depende de las lluvias para mantener la cosecha.</p>
				
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
	
	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<h3>CONOCE LA GRAN <br><span class="orange-text"> VARIEDAD DE PRODUCTOS</span></h3>
            <div class="sale-percent"><span><br></span>DE NUESTRA REGIÓN<span></span></div>
          
        </div>
    </section>
	<!-- end shop banner -->

	<div class="product-section mt-250 mb-2  
	 50">
		<div class="container"></div>
	</div>

<div class="product-section mt-150 mb-150">
		<div class="container"></div>
	</div>

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
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
					
					
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">CONTACTANOS</h2>
						<p> Si deseas registrar tu negocio contantanos:</p>
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