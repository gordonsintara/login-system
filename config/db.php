<?php 

    $dbhost     = "localhost";
    $dbuser     = "root";
    $dbpassword = "";
    $dbname     = "login";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname );

    if($conn){

    }else{
        die("Database connection failed");
    }