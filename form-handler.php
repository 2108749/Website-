<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'diegoblom01@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n";
"User Email: $Visitor_email.\n";
"User Message: $message.\n";
$to = "diegoblom01@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-to: $visitor_email \r\n";
mail($to, $email_subject, $email_body, $headers);
header("Location: index.html");