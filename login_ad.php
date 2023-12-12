<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <style type="assets/css/app.css"></style>
  <style>

body{

}

     #app {
  height:1000px;
 	
  background-size:cover;
  position:relative;
}

#app form {
  max-width:320px;
  width:90%;
  background-color:#1e2833;
  padding:40px;
  border-radius:4px;
  transform:translate(-50%, -50%);
  position:absolute;
  top:50%;
  left:50%;
  color:#fff;
  box-shadow:3px 3px 4px rgba(0,0,0,0.2);
}

#app .illustration {
  text-align:center;
  padding:15px 0 20px;
  font-size:100px;
  color:#2980ef;
}

#app form .form-control {
  background:none;
  border:none;
  border-bottom:1px solid #434a52;
  border-radius:0;
  box-shadow:none;
  outline:none;
  color:inherit;
}

#app form .btn-primary {
  background:#214a80;
  border:none;
  border-radius:4px;
  padding:11px;
  box-shadow:none;
  margin-top:26px;
  text-shadow:none;
  outline:none;
}

#app form .btn-primary:hover, .login-dark form .btn-primary:active {
  background:#214a80;
  outline:none;
}

#app form .forgot {
  display:block;
  text-align:center;
  font-size:12px;
  color:#6f7a85;
  opacity:0.9;
  text-decoration:none;
}

/*.app form .btn-primary:active {
  transform:translateY(1px);
}
*/
  .alert-danger {
    color: #a94442;
    background-color: transparent;
    border-width: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
}
  .alert-success {
    color:  #3c763d;
    background-color: transparent;
    border-width: 0px;
      padding-bottom: 0px;
    padding-left: 0px;
}
</style>
<script >
  

$(document).ready(function () {
$("#in_submit").click(function () {

inemail=$("#inemail").val();
inpassword=$("#inpassword").val();

$.ajax({
type:"POST",
url:"check_login_ad.php",
data: "inemail=" + inemail + "&inpassword=" + inpassword,
success:function(html)
{
if(html=='true')
{
$("#add_err_in").html('<div class="alert alert-success"><strong>Authenticated</strong>.</div>');
window.location.href = "index_ad.php";

}

else if(html=="false")
{

$("#add_err_in").html('<div class="alert alert-danger"><strong>Authentication</strong> failed.</div>');  
}

else
{
 $("#add_err_in").html('<div class="alert alert-danger"> <strong>Error</strong> processing request. Please try again.</div>');
}
},
beforeSend: function(){
                        $("#add_err2").html('<div class="alert alert-info"><strong>Loading...</strong> </div>');
                    }
                });

return false;
});
});

</script>
</head>
<body>
<div id="app" style="background-image: url('assets/img/backy.jpg');">

	
       <form method="POST"  class="form-horizontal"><input type="hidden" name="_token" value="lwd9TzVUwqmH3FkV1BJDbvN0oBkeetk7p2zuEJ2Y"> <h2 class="sr-only">Login Form</h2> <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div> <div class="form-group"><input id="inemail" type="email" name="email" value="" required="required" autofocus="autofocus" placeholder="Email" class="form-control"></div> <div class="form-group">
       	<input id="inpassword" type="password" name="password" required="required" placeholder="Password" class="form-control">
       </div> 
       <div id="add_err_in"></div>
       <div class="form-group"><!-- <div class="checkbox"><label><input type="checkbox" name="remember"> Remember Me -->
                                    <!-- </label></div> --> <button  id="in_submit"type="submit" class="btn btn-primary  btn-block">
                                    Login
                                </button> <!-- <a href="http://lsapp.test/password/reset" class="btn btn-link forgot">
                                    Forgot Your Password?
                                </a> --></div>
                        </form>
</div>
</body>
</html>