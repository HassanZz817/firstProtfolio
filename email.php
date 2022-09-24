<?php
//get data from form  
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "tfshan05@mail.com";
$subject = "Mail From website";
$txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: hassanalbar@gmail.com" . "\r\n" .
    "CC: tfshan05@mail.com";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:thankyou.html");
