<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']


$email_form = 'samsonidze80gmail.com'
$email_subject = 'New Form Submission'
$email_body = "User Name: $name.\n"
                "User Name: $visitor_email.\n"
                     "Subject: $Subject.\n"
                          "User Message: $message.\n"

$to = 'samsonidze80@gmail.com'
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $Visitor_from \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html")
?>