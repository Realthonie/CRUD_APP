<?php

    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $db = "alx-portfolio_project";

    $conn = mysqli_connect($host, $user, $password, $db);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    } else{
        //echo "Connected successfully";
    }

?>