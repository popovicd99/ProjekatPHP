<?php

class Song{
    public $id;
    public $artist;
    public $songname;
    public $category;
    public $date;
    public $rank;


    public function __construct($id=null,$artist=null,$songname=null,$category=null,$date=null,$rank=null){
        $this->id = $id;
        $this->artist = $artist;
        $this->songname = $songname;
        $this->category = $category;
        $this->date = $date;
        $this->rank = $rank;
    }

    public static function getAll(mysqli $conn){

        $query = "SELECT s.artist,s.songname,c.categoryname,s.date,s.rank FROM song s JOIN category c ON s.category=c.id";
        
        return $result = $conn->query($query);
    }


}

?>