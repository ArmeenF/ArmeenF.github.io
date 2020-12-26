<?php

$name = $_POST['email'];
$visitor_email = $_POST['name'];
$subject = $_POST['subject'];

$email_from = 'armeenfarange@yahoo.com';

$email_subject = "New Contact Form Submision";

$email_body = "User Email: $visitor_email.\n.".
                "User Name: $name.\n.".
                    "User Message: $subject.\n.";

$to = "armeenfarange@yahoo.com";
$headers = "From: $email_from \r\n";
$headsers .= "Reply_To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

headers("Location: contact.html");




?>
