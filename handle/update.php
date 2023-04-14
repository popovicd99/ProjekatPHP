<?php
    include_once "../db/dbbroker.php";
    include_once "../model/song.php";

    if(isset($_POST["eartist"]) && isset($_POST["esongname"]) && isset($_POST["ecat"]) && isset($_POST["edate"]) && isset($_POST["erank"])){
        $response = Song::update($_POST["eid"],$_POST["eartist"],$_POST["esongname"],$_POST["ecat"],$_POST["edate"],$_POST["erank"],$conn);

        if($response){
            echo "success";
        }else{
            echo "fail";
        }

    }


?>