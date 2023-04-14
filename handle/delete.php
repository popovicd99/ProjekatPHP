<?php
    include_once "../db/dbbroker.php";
    include_once "../model/song.php";
    if(isset($_POST["deleteid"])){
        $response = Song::remove($_POST["deleteid"],$conn);

        if($response){
            echo "success";
        }else{
            echo "fail";
        }
    }
?>
