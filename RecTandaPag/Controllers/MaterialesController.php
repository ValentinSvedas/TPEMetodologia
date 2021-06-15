<?php

require_once "./php/MaterialesModel.php";
require_once "./Views/MaterialesView.php";

class MaterialesController{
    
    private $db;
    private $model;
    private $view;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_cartonero;charset=utf8', 'root', '');
        $this->model = new MaterialesModel();
        $this->view = new MaterialesView();
    }

    function mostrarMateriales(){
      $materiales = $this->model->GetMateriales();
      $this->view->DisplayMateriales($materiales);
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
      var_dump($response);
      //header("Location: ".ADMIN_MATERIALES_URL);
      //die;
    }

}
