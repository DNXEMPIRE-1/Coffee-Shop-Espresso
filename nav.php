<nav class="navbar navbar-dark navbar-expand-lg fixed-top">
<div class="container">

<!-- Navbar: Brand -->
<a class="navbar-brand d-lg-none" href="index.html">Espresso Express</a>

<!-- Navbar: Toggler -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<!-- Navbar: Collapse -->
<div class="collapse navbar-collapse" id="navbarSupportedContent">

<!-- Navbar navigation: Left -->
<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="about-us.php">About Us</a>
</li>
          <li class="nav-item">
            <a class="nav-link" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
<a class="nav-link" href="contact-us.php">Contact</a>
</li>
</ul>

<!-- Navbar: Brand -->
<a class="navbar-brand d-none d-lg-flex" href="index.php">
Espresso Express
</a>

<!-- Navbar navigation: Right -->
<ul class="navbar-nav ml-auto">
	<li class="nav-item">
<a class="nav-link" href="cart.php"><span class="glyphicon glyphicon-shopping-cart " id="cart_color"></span>Cart</a>
</li>
<li class="nav-item">
<a class="nav-link" href="gallery.php">Gallery</a>
</li>

<?php
session_start();
if (! isset($_SESSION['login']))
{
?>	
 <li class="nav-item">
<a id="navbar-login-button" class="nav-link" href="login.php">Login</a>
</li>
<?php
}
else
{
	?>
          <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="http://example.com" id="nav-item__menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-user" aria-hidden="true"><?php print_r($_SESSION['name']); ?> </i>
</a>
<div class="dropdown-menu" aria-labelledby="nav-item__menu">
<a class="dropdown-item" href="order_his.php">Order History</a>
<a class="dropdown-item" href="logout.php">Log Out</a>
</div>
</li>
<?php
}
?>
</ul>



</div> <!-- / .navbar-collapse -->

</div> 

	</nav>
