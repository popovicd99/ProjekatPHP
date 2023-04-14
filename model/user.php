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

    public static function login($ime,$sifra,mysqli $conn){

        $query = "SELECT * FROM user WHERE username='$ime' AND password='$sifra'";
        
        $result = $conn->query($query);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $_SESSION['id'] = $row['id'];
                $_SESSION['isadmin'] = $row['admin'];
            }
            return true;
        }
        return false;
    }

    public static function register($firstname,$lastname,$username,$password, mysqli $conn){
        $query = "INSERT INTO user (firstname,lastname,username,password) VALUES ('$firstname','$lastname','$username','$password')";

        if($result = $conn->query($query)){
            return true;
        }else{
            return false;
        }

    }


}
?>