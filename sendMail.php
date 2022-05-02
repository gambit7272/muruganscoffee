<?php

$name = $_POST["name"];

$phone = $_POST["phone"];
$email = $_POST["email"];
$msg = $_POST["content"];

//include('PHPMailer/class.phpmailer.php');
$msgData = $name . "\n\r" . $phone . "\n\r" . $email . "\n\n\r" . $msg;

$to = "catch2javed@gmail.com";
$From = "From: " . $name . " <" . $email . ">\r\n"; //optional headerfields
$subject = "Murugan's Coffee";

$message = "<html><body>Hi Admin!.. <br/><br/><strong>Name : </strong>" . $name . "! <br/><strong>Email : </strong>" . $email . "<br/>

<br/><strong>Message : </strong><br/>" . $msg . "</body></html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers = "From: sales@visiontradinguae.com";
$status=mail($to,$subject,$message,$headers);

if($status)
{
    header("Location:  contact.html");
exit;
}else
{
    header("Location:  contact.html");
exit;
}
?>