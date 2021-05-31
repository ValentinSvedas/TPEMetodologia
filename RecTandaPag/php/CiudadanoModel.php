<?php

class CiudadanoModel{

    private $db;

    // function __construct(){
    //     $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_cartonero;charset=utf8', 'root', '');
    // }

    function AddPedido($id_ciudadano,$tipo_franja_horaria,$tipo_volumen,$imagen_materiales = ''){
        $sentencia = $this->db->prepare("INSERT INTO pedido(id_ciudadano,tipo_franja_horaria,tipo_volumen,imagen_materiales) VALUES(?,?,?,?,?,?)");
        $sentencia->execute(array($id_ciudadano,$id_pedido,$franja_horaria_inicio,$franja_horaria_fin,$tipo_volumen,$imagen_materiales));
    }

    function DeletePedido($id_pedido){
        $sentencia = $this->db->prepare("DELETE FROM pedido WHERE id_pedido=?");
        $sentencia->execute(array($id_pedido));
    }

    function UpdatePedido($id_ciudadano,$id_pedido,$franja_horaria_inicio,$franja_horaria_fin,$tipo_volumen,$imagen_materiales){
        $sentencia = $this->db->prepare("UPDATE pedido SET (id_ciudadano = $id_ciudadano,franja_horaria_inicio = $franja_horaria_inicio,franja_horaria_fin = $franja_horaria_fin,tipo_volumen = $tipo_volumen,imagen_materiales = $imagen_materiales) WHERE id_pedido =$id_pedido");
        $sentencia->execute();
    }

    function GetPedidos(){
        $sentencia = $this->db->prepare("SELECT * FROM pedido");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function GetPedido($id_ciudadano){
        $sentencia = $this->db->prepare("SELECT FROM pedido WHERE id_ciudadano=?");
        $sentencia->execute(array($id_ciudadano));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
