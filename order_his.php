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

	<title>Espresso Express</title>

	<!-- CSS Plugins -->
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/lightbox/css/lightbox.min.css">
	<link rel="stylesheet" href="assets/plugins/flickity/flickity.min.css">

	<!-- CSS Global -->

  <link rel="stylesheet" href="assets/css/theme.min.css">
  <link rel="stylesheet" href="assets/css/history.css">

<style >
  .ejewMc {
    margin: 2rem 0px 5rem;
    text-align: center;
   
}
.cNjMLA {
    width: 12.5%;
    height: 12.5%;
    object-fit: contain;
    transform: none;
    opacity: 1;
    will-change: transform, opacity;
    border-radius: inherit;
    filter: unset;
    transition: opacity 0.25s ease 0s, transform 0.25s ease 0s;
}
.egPsux{
   font-size: 20px;
    padding-left: 30px;
    padding-top: 20px;
    padding-bottom: 20px;
}
</style>
  </head>
  <body>

	<!-- NAVBAR
	================================================== -->
  <?php require_once 'nav.php' ?> <!-- / .navbar --> <!-- / .navbar -->

	<!-- HEADER
	================================================== -->
  <section class="section section_header" data-parallax="scroll" data-image-src="assets/img/bar-italia-darker.jpg">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Heading -->
          <h1 class="section__heading section_welcome__heading text-center" style="font-family: 'Dosis', sans-serif;
font-family: 'Oswald', sans-serif;
font-family: 'Quicksand', sans-serif;">
            Order History
          </h1>

				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</section>


  <div class="container order_cards" style="padding-top:50px;margin-bottom:30px">
      

<?php
require_once "config.php";

if(isset($_SESSION['name']))
{
$id=($_SESSION['login']);
$sql = "SELECT * FROM orders where id='$id' order by order_id desc";
// echo $id."<br>";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	$i=0;
	$j=0;

    while($row = $result->fetch_assoc()) {
	
	if($i==0)
	echo '<div class="row">';
	echo '<div class="col-lg-4" style="border:50px; "> <div class="card " id="card-a" > <h4 class="card-title header" id="order_number">Order-Number:</h4>';
	echo '<p id="order-number-'. $row["order_id"] .'" class="content">'. $row["order_id"] .'</p>';
	echo '<br> <h4 class="amount header" >Total-Amount:</h4>';
	echo '<p id="amount-' . $row["order_id"] . '" class="content ">' . $row["amount"] .  '</p>';
	echo '<br> <h4 class="items header" >Items</h4>';
	echo '<p class="hidden-data" id="hidden-data-' . $row["order_id"] . '">'. $row["description"] .'</p>';	
	echo '<p id="items-' . $row["order_id"] . '" class="no-of-items content">' . $row["description"] . '</p> <br> <h4 class="date header" >Ordered On:</h4>';
	echo '<p id="ordered-' . $row["order_id"] . '" class="content">' . $row["date"] . '</p>';
	echo '<br> <h4 class="status header" >Status</h4>';
	echo '<p id="status-'. $row["order_id"] . '" class="delivered content">' . $row["status"] .'</p>';
	echo '<br> <div class="card-block modal-button">';
	echo '<button href="#" onclick="modalshow(' . $row['order_id'] . ')" class="add-to-cart btn btn-outline-primary button" data-toggle="modal" data-target="#exampleModalCenter">View Order</button> </div> </div> </div>';
	if($i==2)
	{
	echo '</div>';
	$i=-1;}	
	$i+=1;$j+=1;
	
    }
} else {
    echo '<div class="sc-fCPvlr ejewMc"><div height="200px" width="180px" class="s1isp7-1 dzOBvv sc-hAXbOi fLBnSZ"><div src="" class="s1isp7-3 dqsEmh"></div><img alt="No Orders" src="https://b.zmtcdn.com/webFrontend/96a9a259cfa3dd8e260d65d1f135ab941581004545.png" loading="lazy" class="s1isp7-5 cNjMLA"></div><p class="sc-1hez2tp-0 sc-gAmQfK egPsux">Nothing here yet</p></div>';

}

$conn->close();

}
else
{
echo 'login first';
}


?>


  </div>

  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-title">Order Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table>
            <tbody >
              <tr>
                <th scope="row">Order Number</th>
                <td id="modal-number"></td>
              </tr>
              <tr>
                <th scope="row">Total Amount</th>
                <td id="modal-amount"></td>
              </tr>
              <tr>
                <th class="align-text-top" scope="row">Items</th>
                <td>
                  <div id="kuch">
                </div>
                </td>
              </tr>
              <tr>
                <th scope="row">Ordered On</th>
                <td id="modal-ordered"></td>
              </tr>
              <tr>
                <th scope="row">Status</th>
                <td id="modal-status"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- <div class="modal-footer"> -->

        </div>
      </div>
    </div>
  </div>

  <footer class="section section_footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">

          <!-- About Us -->
          <h5 class="section_footer__heading">
            About Us
          </h5>
          <p>
            We have been brewing our own coffee and serving for 20 years now, and are hugely popular for our great coffee and lively atmosphere.
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

  </body>
</html>
