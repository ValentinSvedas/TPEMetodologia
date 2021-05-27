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

    function UpdateCartonero($dni,$nombre,$apellido,$direccion,$fecha_nacimiento,$tipo_volumen){
        $sentencia = $this->db->prepare("UPDATE cartonero SET (nombre = $nombre,apellido = $apellido,direccion = $direccion,fecha_nacimiento = $fecha_nacimiento,tipo_volumen = $tipo_volumen) WHERE dni=$dni");
        $sentencia->execute();
    }

}

?>
