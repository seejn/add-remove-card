<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];


    //emailing part
    $email_from = "seejn112@gmail.com";
    $email_subject = "NEW FORM SUBMISSION";
    $email_body = "USER NAME: $name .\n" . 
                    "USER EMAIL: $visitor_email .\n".
                    "ADDRESS: $address .\n".
                    "MOBILE NO..: $mobile .\n".
                        "MESSAGE: $message .\n";

    $to = "seejnmaharjan@gmail.com";
    $headers = "FROM: $email_from \r\n";
    $headers .= "REPLY TO: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);     
    
    include_once "insert.php";
?>