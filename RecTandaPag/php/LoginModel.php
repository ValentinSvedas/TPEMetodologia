<?php

class LoginModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_cartonero;charset=utf8', 'root', '');
    }
     
    function GetUser($email){
        $query = $this->db->prepare("SELECT * FROM users WHERE email=?");
        $query->execute(array($email));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
      
}

?>