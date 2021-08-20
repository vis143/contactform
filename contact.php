<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'vishalvis0607@gmail.com';

    $email_subject = "new form";

    $email_body = "user name: $name.\n".
                    "user email: $email.\n".
                     "user message: $message.";
                

                    
    $to = "vishalchouhan0607@gmail.com";
    $headers = "From: $email_from \r\n";
            
    $headers = "Reply-To: $email \r\n";
                 
    mail($to,$email_subject,$email_body,$headers);
                 
    header("Location: index.php");

?>
