<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'bwbwspprt@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "Name: $name.\n".
              "Email: $visitor_email.\n".
              "Subject: $subject.\n";

$to = 'legendmusheer@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");
?>

