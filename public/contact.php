<?php

die($_POST);

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$recipient = "scliftas@gmail.com";
$header = "From: ". $name . " <" . $visitor_email . ">\r\n";
ini_set('sendmail_from', $visitor_email);
mail($recipient, 'New enquiry', $message, $header);
?>