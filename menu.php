<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/ico/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/ico/favicon-16x16.png">
	<link rel="manifest" href="assets/ico/manifest.json">
	<link rel="mask-icon" href="assets/ico/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="assets/ico/favicon.ico">
	<meta name="msapplication-config" content="assets/ico/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<title>Menu</title>

	<!-- CSS Plugins -->
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/lightbox/css/lightbox.min.css">
	<link rel="stylesheet" href="assets/plugins/flickity/flickity.min.css">

	<!-- CSS Global -->
	<link rel="stylesheet" href="assets/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="assets/css/style.css"> <!-- Resource style -->
	<script src="assets/js/modernizr.js"></script>
	<link rel="stylesheet" href="assets/css/theme.min.css">
	
	<style >
		.adtcart {
			width: 93px;

   border-radius: 10px;
   color: #000000;
   font-family: Verdana;
   font-size: 10px;
   font-weight: 100;
   padding: 5px;
color: #333;
    background-color: #fff;
    border-color: #ccc;
       display: inline-block;
    margin-bottom: 0;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
	border: 1px solid gray;
}

.adtcart:hover {
   background: #8AC4D0;
   border: solid #8AC4D0 1px;
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
   text-decoration: none;
}
	</style>


<script type="text/javascript" src="assets/js/menuitem.php"></script>

  </head>
  <body>

	<!-- NAVBAR
	================================================== -->
  <?php require_once 'nav.php' ?> <!-- / .navbar -->

	<!-- HEADER
	================================================== -->
	<section class="section section_header" data-parallax="scroll" data-image-src="assets/img/25.jpg">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Heading -->
					<h1 class="section__heading section_header__heading text-center">
						Menu
					</h1>

				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</section>

	<!-- MENU
	================================================== -->
	<section class="section section_menu section_border_bottom">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Heading -->
					<h2 class="section__heading text-center">
						Browse by categories
					</h2>
					<p class="section__subheading text-center">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						Ratione numquam eos perferendis itaque hic unde, ad, laudantium minima.
					</p>

				</div>
			</div> <!-- / .row -->
		<!-- 	<div class="row">
				<div class="col">

					<nav class="section_menu__nav">
						<ul>
							<li class="active">
								<a href="#menu_images" data-filter=".mains">Mains</a>
							</li>
							<li>
								<a href="#menu_images" data-filter=".lunch">Lunch</a>
							</li>
							<li>
								<a href="#menu_images" data-filter=".dinner">Dinner</a>
							</li>
							<li>
								<a href="#menu_images" data-filter=".drinks">Drinks</a>
							</li>
						</ul>
					</nav>

				</div>
			</div> -->
			<div class="row section_menu__grid" id="menu_images">


<?php
require_once "config.php";

$sql = "SELECT * from menu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {

	
	echo '<div class="col-md-6 section_menu__grid__item mains">';
	echo '<div class="section_menu__item"> <div class="row"> <div class="col-3 align-self-center"> <div class="section_menu__item__img">';
	echo '<img src="assets/img/menu/' . $row["menu_id"] . '.png" alt="not found">';
	echo '</div> </div> <div class="col-6"> <h4 class="1">' . $row["name"];
	echo '</h4><p>';
	echo $row["description"] . '</p> </div> ';
	echo ' <div class="col-3"> <div class="section_menu__item__price text-center"> <p class="1">$';
	echo $row["price"] .'</p><br></div> ';
	echo '<div class="cd-single-item" style="position:absolute;bottom:0"> <a href="#0"> <ul class="cd-slider-wrapper" style="margin-bottom:0" style="margin-bottom:0"> <li class="selected"><button style="padding:7px 9px; font-size:small" class="add-to-cart btn btn-outline-primary button">ADD TO CART</button></li> </ul> </a> <div class="cd-customization" style="padding:0px;">';	
	echo '<button class="add-to-cart" style="width:100%;font-size:small;margin-bottom:0" onclick="addtolocal('. $row["menu_id"] . ')">';
	echo '<em>Add to Cart</em> <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32"> <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/> </svg> </button> </div> <!-- .cd-customization --> <button class="cd-customization-trigger">Customize</button> </div>';
	echo '</div> </div> <!-- / .row --></div> </div>';
	echo '<br>';
	
    }
} else {
    echo "0 results";
}

$conn->close();
?>

				


			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</section>

	<!-- DISHES
	================================================== -->
	<section class="section section_dishes">

		<!-- Header -->
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Heading -->
					<h2 class="section__heading text-center">
						Featured dishes
					</h2>

					<!-- Subheading -->
					<p class="section__subheading text-center">
						Quibusdam in labore tempore quidem voluptatum ullam soluta! Maiores!
					</p>

				</div>
			</div>
		</div>

		<!-- Carouse -->
		<div class="section_dishes__carousel">
			<div class="section_dishes__carousel__item">

				<!-- Image -->
				<img src="assets/img/26.jpg" alt="..." class="section_dishes__carousel__item__img">

				<!-- Body -->
				<div class="section_dishes__carousel__item__body">
					<h5 class="section_dishes__carousel__item__body__heading mb-0">
						Lorem ipsum dolor sit amet <span>$25</span>
					</h5>
					
				</div>

			</div>
			<div class="section_dishes__carousel__item">

				<!-- Image -->
				<img src="assets/img/27.jpg" alt="..." class="section_dishes__carousel__item__img">

				<!-- Body -->
				<div class="section_dishes__carousel__item__body">
					<h5 class="section_dishes__carousel__item__body__heading mb-0">
						Lorem ipsum dolor sit amet <span>$35</span>
					</h5>
				</div>

			</div>
			<div class="section_dishes__carousel__item">

				<!-- Image -->
				<img src="assets/img/28.jpg" alt="..." class="section_dishes__carousel__item__img">

				<!-- Body -->
				<div class="section_dishes__carousel__item__body">
					<h5 class="section_dishes__carousel__item__body__heading mb-0">
						Lorem ipsum dolor sit amet <span>$18</span>
					</h5>
				</div>

			</div>
			<div class="section_dishes__carousel__item">

				<!-- Image -->
				<img src="assets/img/29.jpg" alt="..." class="section_dishes__carousel__item__img">

				<!-- Body -->
				<div class="section_dishes__carousel__item__body">
					<h5 class="section_dishes__carousel__item__body__heading mb-0">
						Lorem ipsum dolor sit amet <span>$32</span>
					</h5>
				</div>

			</div>
			<div class="section_dishes__carousel__item">

				<!-- Image -->
				<img src="assets/img/30.jpg" alt="..." class="section_dishes__carousel__item__img">

				<!-- Body -->
				<div class="section_dishes__carousel__item__body">
					<h5 class="section_dishes__carousel__item__body__heading mb-0">
						Lorem ipsum dolor sit amet <span>$40</span>
					</h5>
				</div>

			</div>
			<div class="section_dishes__carousel__item">

				<!-- Image -->
				<img src="assets/img/31.jpg" alt="..." class="section_dishes__carousel__item__img">

				<!-- Body -->
				<div class="section_dishes__carousel__item__body">
					<h5 class="section_dishes__carousel__item__body__heading mb-0">
						Lorem ipsum dolor sit amet <span>$27</span>
					</h5>
				</div>

			</div>
		</div> <!-- / .section_dishes__carousel -->

	</section>



	<!-- FOOTER
	================================================== -->
  <footer class="section section_footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">

					<!-- About Us -->
					<h5 class="section_footer__heading">
						About Us
					</h5>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti dolorum, sint corporis nostrum, possimus unde eos vitae eius quasi saepe.
					</p>

				</div>
				<div class="col-sm-4">

					<!-- Contact info -->
					<h5 class="section_footer__heading">
						Contact info
					</h5>
					<ul class="section_footer__info">
						<li>
							<i class="fas fa-map-marker-alt"></i> 422, Nairob, 35C, Kenya
						</li>
						<li>
							<i class="fas fa-phone"></i> 0171-2674589
						</li>
						<li>
							<i class="far fa-envelope"></i> <a href="mailto:tarun1224.cse18@chitkara.edu.in">espressoexpress@outlook.com</a>
						</li>
					</ul>

				</div>
				<div class="col-sm-4">

					<!-- Opening hours -->
					<h5 class="section_footer__heading">
						Opening hours
					</h5>
					<div class="section_footer__open">
						<div class="section_footer__open__days">Monday - Friday</div>
						<div class="section_footer__open__time">5:00 AM - 11:00 PM</div>
					</div>
					<div class="section_footer__open">
						<div class="section_footer__open__days">Saturday - Sunday</div>
						<div class="section_footer__open__time">3:00 AM - 10:00 PM</div>
					</div>

				</div>
			</div> <!-- / .row -->
			<div class="row">
				<div class="col-12">

					<!-- Copyright -->
					<div class="section_footer__copyright">
						&copy; <span id="js-current-year"></span>DNX Espresso Express. All rights reserved.
					</div>

				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</footer>

	<!-- JAVASCRIPT
	================================================== -->

	<!-- JS Global -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- JS Plugins -->
	<script src="assets/plugins/parallax/parallax.min.js"></script>
	<script src="assets/plugins/isotope/lib/imagesloaded.pkgd.min.js"></script>
	<script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
	<script src="assets/plugins/flickity/flickity.pkgd.min.js"></script>
	<script src="assets/plugins/lightbox/js/lightbox.min.js"></script>
	<script src="assets/plugins/reservation/reservation.js"></script>
	<script src="assets/plugins/alerts/alerts.js"></script>

	<!-- JS Custom -->
	<script src="assets/js/theme.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<script src="assets/js/javascript.js"></script>	
	<script src="assets/js/jquery-2.1.4.js"></script>
  <script src="assets/js/main.js"></script>

  </body>
</html>
