<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "sarinih";
    
    $db = mysqli_connect($hostname,$username,$password,$database_name);

    if($db->connect_error){
        echo "connect error";
        die("error connecting to database!");
    }
?>