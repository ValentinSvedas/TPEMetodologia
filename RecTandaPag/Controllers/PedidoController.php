<?php

require_once "./php/PedidoModel.php";
require_once "./Views/PedidoView.php";

class PedidoController{
    
    private $db;
    private $model;
    private $view;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_cartonero;charset=utf8', 'root', '');
        $this->model = new PedidoModel();
        $this->view = new PedidoView();
    }
    
    function addPedido(){
      // var_dump($_POST);
      if ($_POST !=null){
        $id_ciudadano = 1;
        $filepath = '';
        if ($_FILES != NULL && $_FILES['imagen_material']['name']) {
          if ($_FILES['image_url']['type'] == "image/jpeg" || $_FILES['image_url']['type'] == "image/jpg" || $_FILES['image_url']['type'] == "image/png") {
              $filepath = $this->moveFile($_FILES['image_url']);
          } else {
              $this->view->showError("Formato no aceptado");
          }
      }
        $this->model->AddPedido($id_ciudadano,$_POST['franja_horario'],$_POST['volumen'],$filepath);
        //$this->enviarMailCooperativa();
        $this->view->mostrarResultado();
      } else{
        $this->view->mostrarError();
      }
    }

    private function moveFile($imagen) {
      $filepath = "images/" . uniqid() . "." . strtolower(pathinfo($imagen['name'], PATHINFO_EXTENSION));  
      move_uploaded_file($imagen['tmp_name'], $filepath);
      return $filepath;
    }

    private function enviarMailCooperativa(){
      // ENVIO DE MAIL A LA COOPERATIVA
      $to = "cooperativa@email.com";
      $subject = "Ingresado de nuevo pedido de recoleccion";
      $message = "Mensaje con datos del pedido";
      mail($to, $subject, $message);
    }

    function showPedidosAdmin(){
      $pedidos = $this->model->GetPedidos();
      $this->view->DisplayPedidosAdmin($pedidos);
    }

}
