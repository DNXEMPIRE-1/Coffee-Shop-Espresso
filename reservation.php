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

	<title>Touché - Café & Restaurant Template</title>

	<!-- CSS Plugins -->
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/lightbox/css/lightbox.min.css">
	<link rel="stylesheet" href="assets/plugins/flickity/flickity.min.css">

	<!-- CSS Global -->
	<link rel="stylesheet" href="assets/css/theme.min.css">

  </head>
  <body>

	<!-- NAVBAR
	================================================== -->
	<?php require_once 'nav.php' ?> <!-- / .navbar -->

	<!-- HEADER
	================================================== -->
	<section class="section section_header" data-parallax="scroll" data-image-src="assets/img/32.jpg">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Heading -->
					<h1 class="section__heading section_header__heading text-center">
						Reservation
					</h1>

				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</section>

	<!-- RESERVATION
	================================================== -->
	<section class="section section_reservation">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Heading -->
					<h2 class="section__heading text-center">
						Online table reservation
					</h2>

					<!-- Subheading -->
					<p class="section__subheading text-center">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam illo praesentium sequi in cum, beatae maiores quae qui.
					</p>

				</div>
			</div> <!-- / .row -->
			<div class="row justify-content-lg-center  section_reservation__row">
				<div class="col-lg-8">

					<!-- Form -->
					<form class="section_reservation__form" id="reservation__form">
						<div class="row">
							<div class="col-md-6">

								<div class="form-group">
									<label class="sr-only" for="reservation__form__name">Full name</label>
									<input type="text" class="form-control" id="reservation__form__name" name="reservation__form__name" placeholder="Full name">
									<div class="invalid-feedback"></div>
								</div>
								<div class="form-group">
									<label class="sr-only" for="reservation__form__phone">Phone number</label>
									<input type="tel" class="form-control" id="reservation__form__phone" name="reservation__form__phone" placeholder="Phone number">
									<div class="invalid-feedback"></div>
								</div>
								<div class="form-group">
									<label class="sr-only" for="reservation__form__email">E-mail address</label>
									<input type="email" class="form-control" id="reservation__form__email" name="reservation__form__email" placeholder="E-mail address">
									<div class="invalid-feedback"></div>
								</div>

							</div>
							<div class="col-md-6">

								<div class="form-group">
									<label class="sr-only" for="reservation__form__people">People</label>
									<select class="form-control" id="reservation__form__people" name="reservation__form__people">
										<option value="1">1 person</option>
										<option value="2" selected="">2 persons</option>
										<option value="3">3 persons</option>
										<option value="4">4 persons</option>
										<option value="5">5 persons</option>
									</select>
									<div class="invalid-feedback"></div>
								</div>
								<div class="form-group">
									<label class="sr-only" for="reservation__form__date">Date</label>
									<input type="date" class="form-control" id="reservation__form__date" name="reservation__form__date" value="2016-12-31">
									<div class="invalid-feedback"></div>
								</div>
								<div class="form-group">
									<label class="sr-only" for="reservation__form__time">Time</label>
									<input type="time" class="form-control" id="reservation__form__time" name="reservation__form__time" value="18:00">
									<div class="invalid-feedback"></div>
								</div>

							</div>
							<div class="col">

								<div class="text-center">
									<button type="submit" class="btn btn-primary">
										Reserve a table
									</button>
								</div>

							</div>
						</div> <!-- / .row -->
					</form>

				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</section>

	<!-- PHONE
	================================================== -->
	<section class="section section_phone section_no-padding_top">
		<div class="container">
			<div class="row justify-content-lg-center section_phone__row">
				<div class="col-lg-8">

					<p class="font-small text-center">
						or call us:
					</p>
					<p class="section_phone__number text-center">
						<a href="tel:+19876543210">+1 987 654 3210</a>
					</p>

				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</section>

	<!-- MAP
	================================================== -->
	<section class="section section_map">
		<div class="section_map__map" data-lat="40.7590403" data-lng="-74.0392713" data-zoom="12" data-info="<h4 class='section_map__map__heading text-center'>Touche restaurant</h4><p class='section_map__map__content text-center text-muted'>1234 Altschul, New York, NY 10027-0000<br>+1 987 654 3210</p>"></div>
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
							<i class="fas fa-map-marker-alt"></i> 09009, Ruaka,  Nairob, 35C, Kenya
						</li>
						<li>
							<i class="fas fa-phone"></i> +1 987 654 3210
						</li>
						<li>
							<i class="far fa-envelope"></i> <a href="mailto:admin@domain.com">admin@domain.com</a>
						</li>
					</ul>

				</div>
				<div class="col-sm-4">

					<!-- Opening hours -->
					<h5 class="section_footer__heading">
						Opening hours
					</h5>
					<div class="section_footer__open">
						<div class="section_footer__open__days">Monday - Thursday</div>
						<div class="section_footer__open__time">10:00 AM - 11:00 PM</div>
					</div>
					<div class="section_footer__open">
						<div class="section_footer__open__days">Friday - Sunday</div>
						<div class="section_footer__open__time">12:00 AM - 03:00 AM</div>
					</div>

				</div>
			</div> <!-- / .row -->
			<div class="row">
				<div class="col-12">

					<!-- Copyright -->
					<div class="section_footer__copyright">
						&copy; <span id="js-current-year"></span> Touché. All rights reserved.
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnKt8_N4-FKOnhI_pSaDL7g_g-XI1-R9E"></script>

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

  </body>
</html>
