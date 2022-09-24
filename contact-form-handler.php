<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'darwishkareem@hotmail.com';

$email_subject = "New Form Submitted on Swift";

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "User Message: $message.\n";

    $to = "darwishkareem@hotmail.com";

    $headers = "From: $email_from \r\n";
    
    $headers .= "Reply-To $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");

?>