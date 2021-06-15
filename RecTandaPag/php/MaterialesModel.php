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

    function NuevoMaterial($nombre,$descrip){
        $query = $this->db->prepare("INSERT INTO materiales(nombre,descripcion) VALUES(?,?)");
        return $query->execute(array($nombre,$descrip));
    }

    function BorrarMaterial($id){
        $query = $this->db->prepare("DELETE FROM materiales WHERE id_material=?");
        return $query->execute(array($id));
    }

    function GetSingleMaterial($id){
        $query = $this->db->prepare("SELECT * FROM materiales WHERE id_material= ?");
        $query -> execute(array($id));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }


}

?>
