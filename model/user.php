<?php

class User {

    public $id;
    public $firstname;
    public $lastname;
    public $username;
    public $password;

    public function __construct($id=null,$firstname=null,$lastname=null,$username=null,$password=null){
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->password = $password;
    }

    public static function login($username,$password,mysqli $conn){
        $query = "SELECT * FROM user WHERE username=$username AND password=$password";
        $result = $conn->query($query);

        if($result){
            while($row = $result->fetch_assoc()){
                $_SESSION["id"] = $row["id"];
                $_SESSION["isadmin"] = $row["admin"];
            }
            return true;
        }
        return false;
    }
}
?>