<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'vishalvis0607@gmail.com';

    $email_subject = "new form";

    $email_body = "user name: $name.\n".
                    "user email: $email.\n".
                     "user message: $message.\n";
                

                    
    $to = "vishalchouhan0607@gmail.com";
    $headers = "from: $email_from \r\n";
            
    $headers = "replt-to: $email \r\n";
                 
    mail($to,$email_subject,$email_body,$headers);
                 
    header("location: form.html");

?>