<?php
    include_once "../db/dbbroker.php";
    include_once "../model/song.php";
    if(isset($_POST['filter'])){
        $response = Song::filter($_POST['filter'],$conn);

        echo json_encode($response);
    }
?>