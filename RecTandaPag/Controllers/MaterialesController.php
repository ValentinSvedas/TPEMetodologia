<?php

require_once "./php/MaterialesModel.php";
require_once "./Views/MaterialesView.php";
require_once "./helpers/authHelper.php";
require_once "./Controllers/LoginController.php";

class MaterialesController{
    
    private $db;
    private $model;
    private $view;
    private $authHelper;
    private $login;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_cartonero;charset=utf8', 'root', '');
        $this->model = new MaterialesModel();
        $this->view = new MaterialesView();
        $this->authHelper = new AuthHelper();
        $this->login = new LoginController();
        
    }

    function mostrarMateriales(){
        $this->authHelper->checkLoggedIn();
        if($this->authHelper->checkUser()){
          $materiales = $this->model->GetMateriales();
          $this->view->DisplayMateriales($materiales);
        }else{
          header("Location: ".BASE_URL."home");
        }
      }

    function nuevoMaterial(){
      $nombre = $_POST['nombre_material'];
      $descrip = $_POST['descripcion_material'];
      $response = $this->model->nuevoMaterial($nombre,$descrip);
      $materiales = $this->model->GetMateriales();
      $this->view->DisplayMateriales($materiales);
    }

    function borrarMaterial($id_material = null){
      $this->model->borrarMaterial($id_material);
      header("Location: ".ADMIN_MATERIALES_URL);
      die;
    }

    function EditMaterial($id_material = 1){
      $material = $this->model->GetSingleMaterial($id_material);
      $this->view->DisplayEditMaterial($material);
    }

    function GuardarMaterial($id_material = 1,$nombre,$descrip){
      $response = $this->model->GuardarMaterial($id_material,$nombre,$descrip);
      header("Location: ".ADMIN_MATERIALES_URL);
      die;
    }

}
