<?php

class CiudadanoModel{

    private $db;

     function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_cartonero;charset=utf8', 'root', '');
    }

    function AddCiudadano($nombre,$apellido,$direccion,$telefono){
        $sentencia = $this->db->prepare("INSERT INTO ciudadano(nombre,apellido,direccion,telefono) VALUES(?,?,?,?)");
        $sentencia->execute(array($nombre,$apellido,$direccion,$telefono));
        return $this->db->lastInsertId();
    }

}

?>
