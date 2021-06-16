<?php

class PedidoModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_cartonero;charset=utf8', 'root', '');
    }

    function AddPedido($id_ciudadano,$tipo_franja_horaria,$tipo_volumen,$imagen_materiales = null){
        $sentencia = $this->db->prepare("INSERT INTO pedido(id_ciudadano,tipo_franja_horaria,tipo_volumen,imagen_materiales) VALUES(?,?,?,?)");
        $sentencia->execute(array($id_ciudadano,$tipo_franja_horaria,$tipo_volumen,$imagen_materiales));
    }

    // function DeletePedido($id_pedido){
    //     $sentencia = $this->db->prepare("DELETE FROM pedido WHERE id_pedido=?");
    //     $sentencia->execute(array($id_pedido));
    // }

    // function UpdatePedido($id_ciudadano,$id_pedido,$franja_horaria_inicio,$franja_horaria_fin,$tipo_volumen,$imagen_materiales){
    //     $sentencia = $this->db->prepare("UPDATE pedido SET (id_ciudadano = $id_ciudadano,franja_horaria_inicio = $franja_horaria_inicio,franja_horaria_fin = $franja_horaria_fin,tipo_volumen = $tipo_volumen,imagen_materiales = $imagen_materiales) WHERE id_pedido =$id_pedido");
    //     $sentencia->execute();
    // }

    // !!!!! RELIZAR PEDIDO ENTRE TABLAS PARA TRAER TODA LOS DATOS Y NO REFERENCIAS
    function GetPedidos(){
        $sentencia = $this->db->prepare("
        SELECT p.id_pedido,c.id_ciudadano,h.id_horario,c.nombre,c.apellido,c.direccion,h.franja_horario,v.tamanio FROM pedido p 
        JOIN ciudadano c ON c.id_ciudadano = p.id_ciudadano
        JOIN volumen v ON v.id_volumen=p.tipo_volumen
        JOIN horario h ON h.id_horario=p.tipo_franja_horaria;");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function GetPedido($id_pedido){
        $sentencia = $this->db->prepare("SELECT FROM pedido WHERE id_pedido=?");
        $sentencia->execute(array($id_pedido));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
