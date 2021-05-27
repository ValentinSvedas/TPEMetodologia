<?php

require_once "./libs/smarty/Smarty.class.php";
require_once "CartoneroModel.php";

class administrar{
    
    private $db;
    private $model;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_cartonero;charset=utf8', 'root', '');
        $this->model = new CartoneroModel();
    }
    function Home(){
        $smarty = new Smarty();
        $smarty->display('templates/index.tpl');
    }
    function ShowLogin(){
        $smarty = new Smarty();
        $smarty->display('templates/login.tpl');
    }

    function ShowLoginAdmin(){
        $smarty = new Smarty();
        $smarty->display('templates/indexAdmin.tpl');
    }
    function ShowAdvice(){
        $smarty = new Smarty();
        $smarty->display('templates/advice.tpl');
    }
    function ShowReciclar(){
        $smarty = new Smarty();
        $smarty->display('templates/reciclar.tpl');
    }
    function Showadministrar($cartoneros){
        $smarty = new Smarty();
        $smarty->assign('cartoneros', $cartoneros);
        $smarty->display('templates/administrar.tpl');
    }

    function getCartoneros(){
        $cartoneros= $this->model->GetCartoneros();
        $this->Showadministrar($cartoneros);
    }



}
