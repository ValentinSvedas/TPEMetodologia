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
    
    function addMaterial($params = null){
      
    }

    function mostrarMateriales(){
      $materiales = $this->model->GetMateriales();
      $this->view->DisplayMateriales($materiales);
    }

}
