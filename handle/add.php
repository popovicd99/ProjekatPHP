<?php
    include_once "../db/dbbroker.php";
    include_once "../model/song.php";

    if(isset($_POST["artist"]) && isset($_POST["songname"]) && isset($_POST["cat"]) && isset($_POST["date"]) && isset($_POST["rank"])){
        $response = Song::add($_POST["artist"],$_POST["songname"],$_POST["cat"],$_POST["date"],$_POST["rank"],$conn);

        if($response){
            echo "success";
        }else{
            echo "fail";
        }

    }


?>