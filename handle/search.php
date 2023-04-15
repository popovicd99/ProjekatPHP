<?php
    include_once "../db/dbbroker.php";
    include_once "../model/song.php";
    if(isset($_POST['search'])){
        $response = Song::search($_POST['search'],$conn);

        echo json_encode($response);
    }
?>