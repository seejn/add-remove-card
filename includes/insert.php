<?php
    include_once 'db_conn.php';

    $name =  mysqli_real_escape_string($conn,$_POST['name']);
    $visitor_email =  mysqli_real_escape_string($conn,$_POST['email']);
    $address =  mysqli_real_escape_string($conn,$_POST['address']);
    $mobile =  mysqli_real_escape_string($conn,$_POST['mobile']);
    $message =  mysqli_real_escape_string($conn,$_POST['message']);

    $sql = "INSERT INTO generalinfo (NAME, EMAIL, ADDRESS, MOBILE, MESSAGE) VALUES
    ('$name', '$visitor_email', '$address', '$mobile', '$message');";

    mysqli_query($conn, $sql);
    header("Location: ../index.php");
?>