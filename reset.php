<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/ico/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/ico/favicon-16x16.png">
	<link rel="manifest" href="assets/ico/manifest.json">
	<link rel="mask-icon" href="assets/ico/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="assets/ico/favicon.ico">
	<meta name="msapplication-config" content="assets/ico/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"); -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap">
<!-- <link rel="stylesheet" href="assets/css/stylelogin.css" /> -->
	<title>Espresso Express</title>
	<style >

html,body,input { 
	height: 100%;
background-image:url('assets/img/reset.jpg'); 
font-family: "Poppins", sans-serif;

}


body{
	display: -ms-flexbox;
	display: -webkit-box;
	display: flex;
	-ms-flex-align: center;
	-ms-flex-pack: center;
	-webkit-box-align: center;
	align-items: center;
	-webkit-box-pack: center;
	justify-content: center;
	background-color: #f5f5f5;
}

form{
	padding-top: 10px;
	font-size: 14px;
	margin-top: 30px;
}

.card-title{ font-weight:300; }

.btn{
	font-size: 14px;
	margin-top:20px;
	border-radius: 49px;
}

.login-form{ 
	width:320px;
	margin:20px;
}

.sign-up{
	text-align:center;
	padding:20px 0 0;
}

span{
	font-size:14px;
}

.panel-body{
	padding-top: 1px;
}

.input-group{
	padding-bottom: 10px;
}
.input-field {
  max-width: 380px;
  width: 100%;
  background-color: #f0f0f0;
  
  margin: 10px 0;
  height: 55px;
  border-radius: 55px;
  display: grid;
  grid-template-columns: 15% 85%;
  padding: 0 0.4rem;
  position: relative;
}

.input-field i {
  text-align: center;
  line-height: 55px;
  color: #acacac;
  transition: 0.5s;
  font-size: 1.1rem;
}

.input-field input {
  background: none;
  outline: none;
  border: none;
  line-height: 1;
  font-weight: 600;
  font-size: 1.1rem;
  color: #333;
  font-size:15px
}

.input-field input::placeholder {
  color: #aaa;
  font-weight: 500;
  font-size: 15px;
}



	</style>


	<script >
  

$(document).ready(function () {
$("#in_submit").click(function () {

inemail=$("#inemail").val();


$.ajax({
type:"POST",
url:"check_reset.php",
data: "inemail=" + inemail,
success:function(html)
{
if(html=='true')
{
$("#form_id").hide();
$("#in_submit").hide();
$("#add_err_in").html('<div class="alert alert-success"><strong>Mail sent</strong>.</div>');


}

else if(html=="false")
{

$("#add_err_in").html('<div class="alert alert-danger"><strong>Authentication</strong> failed.</div>');  
}

else
{
 $("#add_err_in").html(html);
}
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

<div class="container" >
    <div class="row">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default" style="background-color: rgb(255,255,255,0.9);border-radius: 10px;" >
                    <div class="panel-body">
                        <div class="text-center">
                          <h3><i class="fa fa-lock fa-4x"></i></h3>
                          <h2 class="text-center">Forgot Password?</h2>
                          <p>You can reset your password here.</p>
                            <div class="panel-body" >
                              
                              <form class="form">
                                <fieldset>
                                  <div class="form-group" id="form_id">
                                    <div class="input-field">
                                      <i class="fa fa-user" aria-hidden="true" style="font-size:20px"></i>

                                      <input id="inemail" placeholder="email address" type="email" >
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <input class="btn btn-lg btn-primary btn-block" id="in_submit" value="Send My Password" type="submit">
                                  </div>
                                </fieldset>
                              </form>
                              <div id="add_err_in"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>