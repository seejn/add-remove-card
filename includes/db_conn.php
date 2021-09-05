<?php
    $servername = 'remotemysql.com';
    $username = '0zkcvE5xte';
    $password = 'Dz3JFJxhJv';
    $db = '0zkcvE5xte';

    //conecting the database
    $conn = new mysqli($servername, $username, $password, $db);

    //checking the database
    if($conn -> connect_error)
        die("Connection Error: " . $conn -> connect_error);
?>