<?php

require_once "./php/CartoneroModel.php";
require_once "./Views/CartoneroView.php";
require_once "./helpers/authHelper.php";

class PedidoController{
    
    private $db;
    private $model;
    private $view;
    private $authHelper;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_cartonero;charset=utf8', 'root', '');
        $this->model = new CartoneroModel();
        $this->view = new CartoneroView();
        $this->authHelper= new authHelper();
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

    function showCartonerosAdmin(){
      $this->authHelper->checkLoggedIn();
        if($this->authHelper->checkUser()){
          $cartoneros = $this->model->GetCartoneros();
          $this->view->DisplayPedidosAdmin($cartoneros);
        }else{
          header("Location: ".BASE_URL."home");
        }
    }


}
