<?php
    include_once "../db/dbbroker.php";
    include_once "../model/song.php";
    if(isset($_POST['loadid'])){
        $response = Song::load($_POST['loadid'],$conn);

        echo json_encode($response);
    }
?>