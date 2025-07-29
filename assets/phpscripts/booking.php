<?php
    //this is your Email address
    //kinldy update your email here
    $to = "info@example.com"; 
    //this is the sender's Email address
    //this is firt name
    $first_name = $_POST['fullname'];
    //this is last name
    $last_name = $_POST['fullname'];
    //this is phone
    $phone = $_POST['phone'];
    //this is message body
    $message = "Message " . $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['phone'] . "\n\n" . $_POST['message'];

    $headers = "From:" . $from . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
    mail($to,$phone,$message,$headers);
?>