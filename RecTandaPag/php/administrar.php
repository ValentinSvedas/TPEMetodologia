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
    function ShowAñadirCartonero(){
        $smarty = new Smarty();
        $smarty->display('templates/añadirC.tpl');
    }
    function Showadministrar($cartoneros){
        $smarty = new Smarty();
        $smarty->assign('cartoneros', $cartoneros);
        $smarty->display('templates/administrar.tpl');
    }
    
    function ShowDetailCartonero($cartonero){
        $smarty = new Smarty();
        $smarty->assign('cartonero', $cartonero);
        $smarty->display('templates/detalleC.tpl');
    }
    function ShowEditCartonero($cartonero){
        $smarty = new Smarty();
        $smarty->assign('cartonero', $cartonero);
        $smarty->display('templates/editarC.tpl');
    }

    function getCartoneros(){
        $cartoneros= $this->model->GetCartoneros();
        $this->Showadministrar($cartoneros);
    }
    function getCartonero($params = null){
        $dni = $params[':ID'];
        $cartonero= $this->model->GetCartonero($dni);
        $this->ShowDetailCartonero($cartonero);
    }

    function deleteCartonero($params = null){
        $dni = $params[':ID'];
        $cartonero= $this->model->DeleteCartonero($dni);
        $this->ShowAdminLocation();
    }

    function EditCartonero($params = null){
        $dni = $params[':ID'];
        $cartonero = $this->model->GetCartonero($dni);
         $this->ShowEditCartonero($cartonero);
    }
    function addCartonero(){
        $this->model->AddCartonero($_POST['input_dni'],$_POST['input_nombre'],$_POST['input_apellido'],$_POST['input_direccion'],$_POST['input_fecha_nacimiento'],$_POST['input_tipo']);
        $this->ShowAdminLocation();
    }

    function Edit(){
        $this->model->updateCartonero($_POST['input_nombre'],$_POST['input_apellido'],$_POST['input_fecha_nacimiento'],$_POST['input_dni'],$_POST['input_direccion'],$_POST['input_tipo']);
        $this->ShowAdminLocation();
    }

    function ShowAdminLocation(){
        header("Location: ".BASE_URL."administrar");
    }


}
