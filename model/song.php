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

        $query = "SELECT s.id,s.artist,s.songname,c.categoryname,s.date,s.rank FROM song s JOIN category c ON s.category=c.id";
        
        return $result = $conn->query($query);
    }

    public static function add($artist,$songname,$category,$date,$rank, mysqli $conn){
        $query = "INSERT INTO song (artist,songname,category,date,rank) VALUES ('$artist','$songname',$category,$date,$rank)";

        return $result = $conn->query($query);
    }

    public static function remove($id, mysqli $conn){
        $query = "DELETE FROM song WHERE id='$id'";

        return $result = $conn->query($query);
    }

    public static function load($id, mysqli $conn){

        $query = "SELECT s.id,s.artist,s.songname,c.categoryname,s.date,s.rank FROM song s JOIN category c ON s.category=c.id WHERE s.id='$id'";

        $result = $conn->query($query);

        $data = null;

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data = $row;
            }
            return $data;
        }
    }

    public static function update($id,$artist,$songname,$category,$date,$rank, mysqli $conn){
        $query = "UPDATE song SET artist='$artist',songname='$songname',category=$category,date=$date,rank=$rank WHERE id='$id'";

        return $result = $conn->query($query);
    }

    public static function search($search, mysqli $conn){

        $query = "SELECT s.id,s.artist,s.songname,c.categoryname,s.date,s.rank FROM song s JOIN category c ON s.category=c.id WHERE s.artist LIKE '$search%' OR s.songname LIKE'$search%' OR c.categoryname LIKE '$search%' OR s.date LIKE '$search%' OR s.rank LIKE '$search%'";

        $result = $conn->query($query);

        $data = [];

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }

    public static function filter($search, mysqli $conn){

        $query = "SELECT s.id,s.artist,s.songname,c.categoryname,s.date,s.rank FROM song s JOIN category c ON s.category=c.id WHERE c.categoryname LIKE '$search'";

        $result = $conn->query($query);

        $data = [];

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }

}

?>