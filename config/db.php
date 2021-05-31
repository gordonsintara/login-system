<?php 

    $dbhost     = "localhost";
    $dbuser     = "root";
    $dbpassword = "";
    $dbname     = "login";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname );

    if(!$conn){
        die("Database connection failed");
    }