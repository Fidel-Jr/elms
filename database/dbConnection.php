<?php 


    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbName = "elmsdb";

    $conn = new mysqli($localhost, $username, $password, $dbName);

    if($conn->connect_error){
        die("Connection Failed $conn->connect_error");
    }

    // echo "Connected Successfully!";

?>