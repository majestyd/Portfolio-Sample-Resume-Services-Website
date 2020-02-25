<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'Bill Wisniewski Website';
    $email_subject = 'New Message From Bill Wisniewski Contact Form';
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Message: $message.\n";
    $to ="you@youremail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>