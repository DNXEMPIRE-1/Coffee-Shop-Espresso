<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) 
header("location:index.php ");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets/css/stylelogin.css" />
    <title>Sign in & Sign up Form</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
//register ajax post
$(document).ready(function () {
$("#up_submit").click(function () {

upname=$("#upname").val();
upemail=$("#upemail").val();
uppassword=$("#uppassword").val();

$.ajax({
type:"POST",
url:"add_user.php",
data: "upname=" + upname + "&upemail=" + upemail + "&uppassword=" + uppassword,
success:function(html)
{
if(html=='true')
{
$("#add_error").html('<div class="alert alert-info"> <strong>Account</strong> processed.</div>');
window.location.href = "index.php";

}

else if(html=="false")
{

$("#add_error").html('<div class="alert alert-danger"> <strong>Email Address</strong> already in system.</div>'); 
}
else if(html=='upname')
{
$("#add_error").html('<div class="alert alert-danger"><strong>First Name</strong> is required.</div>');
}

else if (html == 'eshort') {
 $("#add_error").html('<div class="alert alert-danger"> <strong>Email Address</strong> is required.</div>');

                        } 
else if (html == 'eformat') {
 $("#add_error").html('<div class="alert alert-danger"><strong>Email Address</strong> format is not valid.</div>');
} 
else if (html == 'pshort') {
$("#add_error").html('<div class="alert alert-danger"><strong>Password</strong> must be at least 6 characters .</div>');
 }
else
{
 $("#add_error").html('<div class="alert alert-danger"> <strong>Error</strong> processing request. Please try again.</div>');
}
},
beforeSend: function(){
                        $("#add_error").html('<div class="alert alert-info"><strong>Loading...</strong> </div>');
                    }
                });

return false;
});
});

$(document).ready(function () {
$("#in_submit").click(function () {

inemail=$("#inemail").val();
inpassword=$("#inpassword").val();

$.ajax({
type:"POST",
url:"check_login.php",
data: "inemail=" + inemail + "&inpassword=" + inpassword,
success:function(html)
{
if(html=='true')
{
$("#add_err_in").html('<div class="alert alert-success"><strong>Authenticated</strong>.</div>');
window.location.href = "index.php";

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
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form  class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="inemail" id="inemail"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="inpassword" id="inpassword" />
            </div>
            <p class="error">error</p>

    <div id="add_err_in"></div>

            <input type="submit" value="Login" class="btn solid" name="insubmit" id="in_submit"/>
            <a href="reset.php" style="margin-bottom:10px;color:#4481EB;"> Forgot Password ?</a>
            
          </form>
          <form  class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="upname" id="upname" />
            </div>
            <p class="error">error</p>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="upemail" id="upemail"/>
            </div>
            <p class="error">error</p>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="uppassword" id="uppassword"/>
            </div>
            
    <div id="add_error"></div>


            <input type="submit" class="btn" value="Sign up" name="upsubmit" id="up_submit"/>

            
              
              
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="assets/img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="assets/img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="assets/js/app.js"></script>
  </body>
</html>