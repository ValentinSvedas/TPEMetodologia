<?php

require_once "./libs/smarty/Smarty.class.php";
require_once "./php/CartoneroModel.php";
require_once "./php/CiudadanoModel.php";
require_once "./Views/CiudadanoView.php";
require_once "./php/PedidoModel.php";
require_once "./Views/PedidoView.php";
require_once "./php/MaterialesModel.php";
require_once "./Views/MaterialesView.php";

//Controlladores para casos complejos
require_once "MaterialesController.php";

class administrar{
    
    private $db;
    private $model;
    private $smarty;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_cartonero;charset=utf8', 'root', '');
        $this->model = new CartoneroModel();
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL',BASE_URL);
    }
    function Home(){
        $stance = new MaterialesModel();
        $materiales = $stance->GetMateriales();
        $this->smarty->assign('materiales',$materiales);
        $this->smarty->display('templates/index.tpl');
    }
    function ShowLogin(){
        $this->smarty->display('templates/login.tpl');
    }

    function ShowLoginAdmin(){
        $this->smarty->display('templates/indexAdmin.tpl');
    }
    function ShowAdvice(){
        $this->smarty->display('templates/advice.tpl');
    }
    function ShowReciclar(){
        $view = new PedidoView();
        $model = new PedidoModel();
        $pedidos = $model->GetPedidos();
        $view->DisplayPedidos($pedidos);
        // $smarty->display('templates/reciclar.tpl');
    }
    function ShowAñadirCartonero(){
        $this->smarty->display('templates/añadirC.tpl');
    }
    function Showadministrar($cartoneros){
        $this->smarty->assign('cartoneros', $cartoneros);
        $this->smarty->display('templates/administrar.tpl');
    }
    function ShowDetailCartonero($cartonero){
        $this->smarty->assign('cartonero', $cartonero);
        $this->smarty->display('templates/detalleC.tpl');
    }
    function ShowEditCartonero($cartonero){
        $this->smarty->assign('cartonero', $cartonero);
        $this->smarty->display('templates/editarC.tpl');
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
        $this->model->AddCartonero($_POST['input_dni'],$_POST['input_nombre'],$_POST['input_apellido'],$_POST['input_direccion'],$_POST['input_fecha_nacimiento'],$_POST['input_volumen']);
        $this->ShowAdminLocation();
    }

    function Edit(){
        $this->model->updateCartonero($_POST['input_nombre'],$_POST['input_apellido'],$_POST['input_fecha_nacimiento'],$_POST['input_dni'],$_POST['input_direccion'],$_POST['input_tipo']);
        $this->ShowAdminLocation();
    }

    function ShowMateriales(){
        $control = new MaterialesController();
        $control->mostrarMateriales();
    }

    function NuevoMaterial($params = null){
        $control = new MaterialesController();
        $control->NuevoMaterial();
    }

    function BorrarMaterial($params = null){
        $control = new MaterialesController();
        $control->BorrarMaterial($params[':id']);
    }

    function ShowAdminLocation(){
        header("Location: ".BASE_URL."administrar");
     }


}
