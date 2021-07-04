<?php

require_once "./php/AcopioModel.php";
require_once "./Views/AcopioView.php";
require_once "./helpers/authHelper.php";

class AcopioController{
    
    private $db;
    private $model;
    private $view;
    private $authHelper;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_cartonero;charset=utf8', 'root', '');
        $this->model = new AcopioModel();
        $this->view = new AcopioView();
        $this->authHelper = new AuthHelper();
    }

    function showAcopiosAdmin(){
      $this->authHelper->checkLoggedIn();
        if($this->authHelper->checkUser()){
          $acopios = $this->model->GetAcopios();
          $this->view->DisplayAcopiosAdmin($acopios);
        }else{
          header("Location: ".BASE_URL."home");
        }
    }

}
