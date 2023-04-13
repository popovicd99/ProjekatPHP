<?php

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $db = "music";

    $conn = mysqli_connect($host,$dbusername,$dbpassword,$db);

    if($conn->connect_errno){
        exit("Greska prilikom konektovanja na bazu!".$conn->connect_errno);
    }

?>