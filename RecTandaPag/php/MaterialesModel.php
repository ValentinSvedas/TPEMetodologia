<?php

class MaterialesModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_cartonero;charset=utf8', 'root', '');
    }

    function GetMateriales(){
        $query = $this->db->prepare("SELECT * FROM materiales");
        $query -> execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }


}

?>