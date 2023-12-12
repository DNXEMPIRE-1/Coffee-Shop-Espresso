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

	<title>Contact Us</title>
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

	<!-- CSS Plugins -->
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/lightbox/css/lightbox.min.css">
	<link rel="stylesheet" href="assets/plugins/flickity/flickity.min.css">

	<!-- CSS Global -->
	<link rel="stylesheet" href="assets/css/theme.min.css">
	<style >
		
		.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}
.alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
	</style>


  </head>
  <body>

  <?php require_once 'nav.php' ?> 


	<section class="section section_header" data-parallax="scroll" data-image-src="assets/img/37.jpg">
		<div class="container">
			<div class="row">
				<div class="col">

					
					<h1 class="section__heading section_header__heading text-center">
						Contact Us
					</h1>

				</div>
			</div> 
		</div> 
	</section>

	<!-- CONTACT
	================================================== -->
	<section class="section section_contact">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Heading -->
					<h2 class="section__heading text-center">
						Get in touch with us
					</h2>

					<!-- Subheading -->
					<p class="section__subheading text-center">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam illo praesentium sequi in cum, beatae maiores quae qui.
					</p>

				</div>
			</div> <!-- / .row -->
			<div class="row">
				<div class="col-md-3 order-md-2">

					<!-- Contact info -->
					<div class="section_contact__info">
						<div class="section_contact__info__item">
							<h4 class="section_contact__info__item__heading">
								Write us
							</h4>
							<p class="section_contact__info__item__content">
								<a href="mailto:infothecafeteria@gmail.com">infothecafeteria@gmail.com</a>
							</p>
						</div>
						<div class="section_contact__info__item">
							<h4 class="section_contact__info__item__heading">
								Call us
							</h4>
							<p class="section_contact__info__item__content">
								<a href="tel:+19876543210">0171-2674589</a>
							</p>
						</div>
						<div class="section_contact__info__item">
							<h4 class="section_contact__info__item__heading">
								Visit us
							</h4>
							<p class="section_contact__info__item__content">
								422, Nairob, 35C, Kenya
							</p>
						</div>
						<div class="section_contact__info__item">
							<h4 class="section_contact__info__item__heading">
								Social links
							</h4>
							<ul class="section_contact__info__item__content">
								<li>
									<a href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-instagram"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>

				</div>
				<div class="col-md-9 order-md-1">
					<div id="add_err2"></div>
					<!-- Contact form -->
					<form class="section_contact__form" id="contact__form" role="form">
						<div class="form-group">
							<label for="contact__form__name" class="sr-only">Full name</label>
							<input type="text" class="form-control" id="fname" name="contact__form__name" placeholder="Full name">
							<div class="invalid-feedback"></div>
						</div>
						<div class="form-group">
							<label for="contact__form__email" class="sr-only">E-mail address</label>
							<input type="email" class="form-control" id="email" name="contact__form__email" placeholder="E-mail address">
							<div class="invalid-feedback"></div>
						</div>
						<div class="form-group">
							<label for="contact__form__email" class="sr-only">Message</label>
							<textarea class="form-control" id="message" name="contact__form__message" rows="9" placeholder="Message"></textarea>
							<div class="invalid-feedback"></div>
						</div>
						<button type="submit" class="btn btn-primary" id="contact">
							Send message
						</button>
					</form>

				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
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
						<li>
							<i class="fas fa-phone"></i> 0171-2674589
						</li>
						<li>
							<i class="far fa-envelope"></i> <a href="mailto:infothecafeteria@gmail.com">infothecafeteria@gmail.com</a>
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

	
	<script type="text/javascript">
        $(document).ready(function () {

            $("#contact").click(function () {

                fname = $("#fname").val();
                email = $("#email").val();
                message = $("#message").val();

                $.ajax({
                    type: "POST",
                    url: "sendmsg.php",
                    data: "fname=" + fname + "&email=" + email + "&message=" + message,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Message Sent!</strong> \ \
                                                 </div>');

                        } else if (html == 'fname_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'fname_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must exceed 2 characters. \ \
                                                 </div>');
												 
						} else if (html == 'email_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'email_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must exceed 2 characters. \ \
                                                 </div>');
												 
						} else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> format incorrect. \ \
                                                 </div>');
												 
						} else if (html == 'message_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'message_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must exceed 2 characters. \ \
                                                 </div>');


                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error'+html+'</strong> processing request. Please try again. \ \
                                                 </div>');
                        }
                    },
                    beforeSend: function () {
                        $("#add_err2").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>




  </body>
</html>
