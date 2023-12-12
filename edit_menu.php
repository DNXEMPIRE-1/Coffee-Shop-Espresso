<?php
clearstatcache();
require_once "config.php";
$id=mysqli_real_escape_string($conn, $_GET["id"]);
$sql = "SELECT * FROM menu WHERE menu_id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
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
    <link rel="stylesheet" href="assets/css/styles.css?v=1" />
    <title>Admin Dashboard</title>
    <style>
html{
    font-size:0.8750em;
    }
</style>

<script type="text/javascript">
$(document).ready(function (e) {
	$("#submit").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "edit.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			if(data == 'true ')
			{$("#add_error").html('<div class="alert alert-success"> <strong>Success!</strong> New Menu Item Added Successfully </div>');}
			else if (data == 'size ')
			$("#add_error").html('<div class="alert alert-danger"> <strong>Image Size</strong> maximum 5 MB allowed. </div>');
			else if(data == 'copy ')
			$("#add_error").html('<div class="alert alert-danger"> <strong>Defualt Image</strong> uanble to add default image.</div>');
			else if(data == 'false_image ')
			$("#add_error").html('<div class="alert alert-danger"> <strong>Email Address</strong> already in system.</div>');
			else
			$("#add_error").html(data);
		    },error: function()
	    	{
	    	} 	        
	   });
	}));
});






</script>

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
        <br>

<section class="content">
      <div class="row">
        <div class="col-12">
        <div class="box">
          <div class="box-body">
          <form method="POST" id="submit" action="upload.php" enctype="multipart/form-data">
            <div class="form-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="fw-700 fs-16 form-label" id="name">Dish Name</label>
                    <input type="text" class="form-control" placeholder="Dish Name" name="name" id="name" required value="<?php echo $row['name']; ?>">
                  </div>
                </div>
                <!--/span-->
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="fw-700 fs-16 form-label" id="price">Price</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="ti-money"></i></div>
                      <input type="number" class="form-control" name="price" id="price" placeholder="enter price" required value="<?php echo $row['price']; ?>"> </div>
                  </div>
                </div>
                <!--/span-->
              </div>
              <!--/row-->
              <!--/row-->
             <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="fw-700 fs-16 form-label">Ingredients and Description</label>
                    <textarea class="form-control p-20" rows="4" id="description" name="description" maxlength="250" placeholder="Add Description" required><?php echo $row['description']; ?></textarea>
                  </div>
                </div>
              </div>

              <div class="row">
              
                <div class="col-md-3">
                  <h4 class="box-title mt-20">Uploaded Image</h4>
                  <div class="product-img text-start">
                    <img src="assets/img/menu/<?php echo $row['menu_id'];?>.png?12334" alt="" class="mb-15 img_size"  id="output">
                    <p>Upload Anonther Image</p>
                    <div class="btn btn-info mb-10 d-grid">
<input type="hidden" name="id" value="<?php echo $row['menu_id'];?>" />
                                            <input type="file" class="upload " id="fily" name="userfile" onchange="loadFile(event)" accept="image/*" > 
                    </div>
                    <br>
                   <!--  <button class="btn btn-success">Edit</button>
                    <button class="btn btn-danger">Delete</button> -->
                  </div>
                </div>
              </div>
              <br>
		
	      <div class="mb-10" id="add_error"></div>
             
             <div class="form-actions mt-10">
              <button type="submit" class="btn btn-primary" id="save"> <i class="fa fa-check"></i> Save / Add</button>
              <button type="button" class="btn btn-danger" >Cancel</button>
            </div>
	
</div>
</form>
</div>
</div>
</div>
</div>
</section>
</main>
  
</div>

<script>

var uploadField = document.getElementById("fily");

uploadField.onchange = function(event) {
    if(this.files[0].size > 5242880){
       document.getElementById("add_error").innerHTML='<div class="alert alert-danger"> <strong>Image Size</strong> maximums 5 MB allowed. </div>';
       document.getElementById("save").disabled = true;
       this.value = "";
    }
    else
    {
	document.getElementById("save").disabled = false;
var reader = new FileReader();
      reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
};




</script>

</body>
</html>