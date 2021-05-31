<?php

require_once "./php/CartoneroModel.php";
require_once "./Views/CartoneroView.php";

class PedidoController{
    
    private $db;
    private $model;
    private $view;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_cartonero;charset=utf8', 'root', '');
        $this->model = new PedidoModel();
        $this->view = new PedidoView();
    }
    
    function addCartonero($params = null){
      // var_dump($_POST);
      if ($_POST !=null){
        $status = $this->model->AddCartonero($_POST['dni'],$_POST['franja_horario'],$_POST['volumen'],$filepath);
        $this->view->mostrarResultado($status);
      } else{
        $this->view->mostrarError();
      }
    }

    private function moveFile($imagen) {
      $filepath = "images/" . uniqid() . "." . strtolower(pathinfo($imagen['name'], PATHINFO_EXTENSION));  
      move_uploaded_file($imagen['tmp_name'], $filepath);
      return $filepath;
  }

}
