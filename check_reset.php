<?php
// session_start();
require_once "config.php";


$inemail=$_POST['inemail'];



$query="SELECT * FROM user where email='$inemail'";
$result=mysqli_query($conn,$query) or die(mysqli_error());
$num_row=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$email2 = "";
if($num_row >= 1)
{

// $subject='cafeteria recovery';

    require 'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
	
	// $mail->SMTPDebug = 2;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'your_email';                 // SMTP username
    $mail->Password = 'your_email_password';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

	$mail->AddReplyTo($inemail);
    $mail->From = $email2;
    $mail->FromName = $row['name'];
    $mail->addAddress($inemail, 'Admin');     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML
	 $password_1=$row['password'];
 	  $mail->Subject = 'Cafeteria recovery';
    $mail->Body = "Reset Link:-<a href='http://localhost/ip/rlogin.php?id=$password_1&email=$inemail'  >Click Here</a>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'true';
    }





}
else
echo 'false';




?>