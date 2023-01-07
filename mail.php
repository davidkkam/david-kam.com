<?php
//get data from form
$name = $_POST['name']; 
$email = $_POST['email'];
$message = $_POST['message']; 
$to = "dka_m@yahoo.com"; 
$subject = "Mail from travel business";
$txt = "Name = ". $name . "\r\n Email = " . $email . "\r\n
	Mesage =" . $message;
$headers = "From: noreply@david_kam.com" . "r\n" . 
"CC: dka_m@yahoo.com";
if($email!=NULL){
	mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
