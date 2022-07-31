<?php
$name = $_POST['name'];
$visitor_emial = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_form = 'gpranav101@gmail.com';
$email_suject = 'New Form Submission';
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "subject: $sunject.\n".
              "User Message: $vistor_email.\n";

$to = 'gpranav101@gmail.com';
$headers = "form $email_form \r\n";
$headers = "Reply To: $visitor_email \r\n";
mail($to,$email_suject,$email_body,$headers);

header("Location: contact.html");
?>