<?php
//get data from form

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "Danielamit11@gmail.com";
$subject = "Mail From website ורד אחזקות";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"Danielamit11@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>