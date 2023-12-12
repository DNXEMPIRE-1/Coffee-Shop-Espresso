<?php clearstatcache(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>Admin Dashboard</title>
    <style >
      
      .row{
display: flex;
  width: 100%;
}
.coly{
 flex: 1;
}
.box
{
height:80%;
padding:20px;
}
.d-flex
{
 justify-content: center;
}
.menu-details
{
height:30%;
}
    </style>
  </head>
  <body id="body">
    <div class="container-fluid">
  <?php require_once 'nav_admin.php' ?>

      <main>
        <div class="main__container">
          <!-- MAIN TITLE STARTS HERE -->

          <div class="main__title">
            <img src="assets/hello.svg" alt="" />
            <div class="main__greeting">
              <h1>Hello Caffeteria</h1>
              <p>Welcome to your admin dashboard</p>
            </div>
        </div>

<?php

if(isset($_GET["mssg"]))
{

if($_GET["mssg"]=='true')

echo '<br><br><div class="alert alert-success"><strong>Success!</strong> Item is removed from menu sucessfully</div>';

else

echo '<br><br><div class="alert alert-danger"><strong>Error!</strong> Not able to process please try later!</div>';

}

?>

<?php
require_once "config.php";

$sql = "SELECT * from menu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
$i=0;
    while($row = $result->fetch_assoc()) {

	if($i==0)
	echo '<div class="row">';
	echo '<div class="col-xxxl-3 col-xl-4 col-lg-6 col-12">';
	echo '<div class="box food-box"> <div class="box-body text-center"> <div class="menu-item"> <img src="assets/img/menu/' . $row["menu_id"] . '.png?" class="img-fluid w-p75 img_size" ></div>';
	echo '<div class="menu-details text-center"> <h4 class="mt-40 mb-10">' . $row["name"] . '</h4> <p>' . $row["description"] . '</p> </div>';
	echo '<div class="act-btn  justify-content-between"> <div class="text-center mx-5">';
	echo '<a href="edit_menu.php?id='. $row["menu_id"]. '" class="waves-effect waves-circle btn btn-circle btn-danger-light btn-xs mb-5"><i class="fa fa-edit"></i></a>';
	echo '&nbsp;<small class="d-block">Edit</small> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	echo '<a href="delete_ad.php?id='. $row["menu_id"]. '" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-xs mb-5"><i class="fa fa-trash"></i></a>';
	echo '&nbsp;<small class="d-block">Delete</small> </div> </div> </div> </div> </div>';
	if($i==2)
	{ $i=-1;echo '</div>';}
	$i=$i+1;
    }
} else {
    echo "0 results";
}

$conn->close();
?>


          </div>




            </div>
        
        </main>
   



    </div>
<script src="assets/js/script.js"></script>
</body>
</html>