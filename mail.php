<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$number= $_POST['mobile'];
$to = "hakijc2@gmail.com";

$subject = "Mail From jceminentocv";
$txt ="Name = ". $name . "\r\n  email = " . $email . "\r\n Message =" . $message ."
      \r\n mobile =" . mobile;

$headers = "From: noreply@jceminentocv.com" . "\r\n" .
"CC: hakijc2@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
redirect
header("Location:thankyou.html");
?>