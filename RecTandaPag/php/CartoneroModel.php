<?php

class CartoneroModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_cartonero;charset=utf8', 'root', '');
    }

    function AddCartonero($dni,$nombre,$apellido,$direccion,$fecha_nacimiento,$tipo_volumen){
        $sentencia = $this->db->prepare("INSERT INTO cartonero(dni,nombre,apellido,direccion,fecha_nacimiento,tipo_volumen) VALUES(?,?,?,?,?,?)");
        $sentencia->execute(array($dni,$nombre,$apellido,$direccion,$fecha_nacimiento,$tipo_volumen));
        
    }

    function DeleteCartonero($dni){
        $sentencia = $this->db->prepare("DELETE FROM cartonero WHERE dni=?");
        $sentencia->execute(array($dni));
    }   

    function UpdateCartonero($nombre,$apellido,$fecha_nacimiento,$dni,$direccion,$tipo_volumen){
        $sentencia = $this->db->prepare("UPDATE cartonero SET nombre = '$nombre',apellido = '$apellido',direccion = '$direccion',fecha_nacimiento = '$fecha_nacimiento',tipo_volumen = '$tipo_volumen' WHERE dni=?");
        $sentencia->execute(array($dni));
    }
    function GetCartoneros(){
        $query = $this->db->prepare("
        SELECT c.dni,c.nombre,c.apellido,c.direccion,c.fecha_nacimiento,v.tamanio FROM cartonero c 
        JOIN volumen v ON v.id_volumen = c.tipo_volumen;");
        $query -> execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function GetCartonero($dni){
        $sentencia = $this->db->prepare("SELECT * FROM cartonero WHERE dni=?");
        $sentencia->execute(array($dni));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }


}

?>
