<?php
//Contact Form
$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$date = $_POST['date'];
$subject= $_POST['subject'];
$parking= $_POST['parking'];
$outside = $_POST['outside'];
$inside = $_POST['inside'];
$to = "therazorgg@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $subject;
$headers = "From: El Portal Restaurante";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:send.html");
?>