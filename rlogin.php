<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/reslog.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap">
<style >
    body{
        background-image: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)),url('assets/img/imgg.jpeg');
        overflow-y: hidden;
        overflow-x: hidden;
    }
    .alert-danger {
    color: #a94442;
}
.alert-success {
    color: #3c763d;
}

.centery
{
    font-family: "Poppins", sans-serif;
text-align: center;     position: absolute;     top: 50%;     bottom: 50%;     width: 100%;font-size:40px; font-weight: 20px;
}
.fuly
{
position:fixed;top:0;left:0;bottom:0;right:0;height:100%;width:100%;background-color:grey;
}
</style>

<script>

$(document).ready(function () {
$("#in_submit").click(function () {

pass1=$("#pass1").val();
pass2=$("#pass2").val();
email=$("#email_in").val();;

$.ajax({
type:"POST",
url:"update_pswd.php",
data: "email=" + email + "&pass1=" + pass1 + "&pass2=" + pass2,
success:function(html)
{
if(html=='true')
{
$("#add_err_in").html('<div class="alert alert-success"><strong>Changed</strong>.</div>');
window.location.href = "login.php";

}

else if(html=="false")
{

$("#add_err_in").html('<div class="alert alert-danger"><strong>Process</strong> failed.</div>');  
}

else if(html == 'p1short' || html == 'p2short' )
{
$("#add_err_in").html('<div class="alert alert-danger"><strong>Password</strong> must be at least 6 characters .</div>');
}
else if(html == 'not_equall')
$("#add_err_in").html('<div class="alert alert-danger"><strong>Password</strong> is not equall.</div>');
else
$("#add_err_in").html(html);


},
beforeSend: function(){
                        $("#add_err_in").html('<div class="alert alert-info"><strong>Loading...</strong> </div>');
                    }
                });

return false;
});
});

</script>


    </head>

    <body>
<?php 

if(isset($_GET["email"]) && isset($_GET["id"]))
{
require_once "config.php";


$inemail=$_GET["email"];




$query="SELECT * FROM user where email='$inemail'";
$result=mysqli_query($conn,$query) or die(mysqli_error());
$num_row=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);

if($num_row >= 1)
{

$password=$_GET["id"];

if($row['password'] != $password)
echo '<div class="fuly"> <div class="centery"> Session Expired </div> </div>';
else
{
echo '<div class="outer"> <div class="main"> <h1>Change Password</h1> <form class="reset"> <div class="input-field"> <i class="fa fa-lock"></i> <input type="password" placeholder="New password" name="pass1" id="pass1"/> </div> <div class="input-field"> <i class="fa fa-lock"></i> <input type="password" placeholder="Repeat Password" name="pass2" id="pass2" /> </div>';
echo ' <input type="hidden" value=' . $row['email']  .'  id="email_in" / >';
echo '<div id="add_err_in"></div> <div class="sub"> <input type="submit"  value="Reset" class="btn" name="insubmit" id="in_submit"/> </div> </form> </div> </div>';
}
}


}

else
{
echo '<div class="fuly"> <div class="centery"> Session Expired </div> </div>' ;
}
?>
       
    </body>
</html>