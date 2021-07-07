<?php

class AcopioModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_cartonero;charset=utf8', 'root', '');
    }

    // !!!!! RELIZAR PEDIDO ENTRE TABLAS PARA TRAER TODA LOS DATOS Y NO REFERENCIAS
    function GetAcopios(){
        $sentencia = $this->db->prepare("
        SELECT * FROM materiales_acopiados ma
        JOIN cartonero c ON ma.id_cartonero=c.dni
        ;");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function GetPedido($id_pedido){
        $sentencia = $this->db->prepare("
        SELECT FROM pedido WHERE id_pedido=?
        ");
        $sentencia->execute(array($id_pedido));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
