<?php

class Category{
    public $id;
    public $categoryname;



    public function __construct($id=null,$categoryname=null){
        $this->id = $id;
        $this->categoryname = $categoryname;
    }

    public static function getAll(mysqli $conn){

        $query = "SELECT * FROM category";
        
        return $result = $conn->query($query);
    }


}

?>