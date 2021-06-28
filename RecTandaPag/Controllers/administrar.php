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
require_once "PedidoController.php";
require_once "./helpers/authHelper.php";
require_once "./Controllers/LoginController.php";

class administrar{
    
    private $db;
    private $smarty;
    private $admin;
    private $login;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_cartonero;charset=utf8', 'root', '');
        $this->smarty = new Smarty();
        $this->admin = new AuthHelper();
        $this->login = new LoginController();
        $this->smarty->assign('loged',$this->admin->checkUser());
        
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
    function ShowAdministrar($cartoneros){
        $this->admin->checkLoggedIn();
        if($this->admin->checkUser()){
            $this->smarty->assign('cartoneros', $cartoneros);
            $this->smarty->display('templates/administrar.tpl');
        }else{
            $this->ShowHomeLocation();
        }
    }
    function ShowDetailCartonero($cartonero){
        $this->smarty->assign('cartonero', $cartonero);
        $this->smarty->display('templates/detalleC.tpl');
    }
    function ShowEditCartonero($cartonero){
        $this->smarty->assign('cartonero', $cartonero);
        $this->smarty->display('templates/editarC.tpl');
    }
    function ShowcentroAcopio(){
        $this->smarty->display('templates/centroAcopio.tpl');
    }
     function ShowpesajeVecino($kgTotales=''){
        $this->smarty->assign('kgTotales',$kgTotales);
        $this->smarty->display('templates/pesajeVecino.tpl');
    }
    
    function agregarkgVecino(){
        $kgTotales = $_POST['input_kgacopiados'];
        if(isset($kgTotales)){
            $this->ShowpesajeVecino($kgTotales);
        }else{
            $this->ShowpesajeVecino();
          }
    }
    
    function ShowpesajeCartonero($kgTotales='', $cartonero =''){
        $this->smarty->assign('kgTotales',$kgTotales);
        $this->smarty->assign('cartonero',$cartonero);
        $this->smarty->display('templates/pesajeCartonero.tpl');
    }
    
    function agregarkgCartonero(){
        $kgTotales = $_POST['input_kgacoplados'];
        $cartonero = $_POST['input_cartonero'];
        if(isset($kgTotales)){
            $this->ShowpesajeCartonero($kgTotales,$cartonero);
        }else{
          $this->ShowpesajeCartonero();
        }
    }

    function getCartoneros(){
        $modelCart = new CartoneroModel();
        $cartoneros= $modelCart->GetCartoneros();
        $this->Showadministrar($cartoneros);
    }
    function getCartonero($params = null){
        $dni = $params[':ID'];
        $modelCart = new CartoneroModel();
        $cartonero= $modelCart->GetCartonero($dni);
        $this->ShowDetailCartonero($cartonero);
    }

    function deleteCartonero($params = null){
        $dni = $params[':ID'];
        $modelCart = new CartoneroModel();
        $cartonero= $modelCart->DeleteCartonero($dni);
        $this->ShowAdminLocation();
    }

    function EditCartonero($params = null){
        $dni = $params[':ID'];
        $modelCart = new CartoneroModel();
        $cartonero = $modelCart->GetCartonero($dni);
        $this->ShowEditCartonero($cartonero);
    }
    function addCartonero(){
        $modelCart = new CartoneroModel();
        $modelCart->AddCartonero($_POST['input_dni'],$_POST['input_nombre'],$_POST['input_apellido'],$_POST['input_direccion'],$_POST['input_fecha_nacimiento'],$_POST['input_volumen']);
        $this->ShowAdminLocation();
    }

    function Edit(){
        $modelCart = new CartoneroModel();
        $modelCart->updateCartonero($_POST['input_nombre'],$_POST['input_apellido'],$_POST['input_fecha_nacimiento'],$_POST['input_dni'],$_POST['input_direccion'],$_POST['input_tipo']);
        $this->ShowAdminLocation();
    }

    function EditMaterial($params = null){
        $id = $params[':id'];
        $control = new MaterialesController();
        $control->EditMaterial($id);
    }

    function GuardarMaterial($params = null){
        $id = $params[':id'];
        $control = new MaterialesController();
        $control->GuardarMaterial($id,$_POST['nombre_material'],$_POST['descripcion_material']);
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

    function ShowPedidos(){
        $control = new PedidoController();
        $control->showPedidosAdmin();
    }
   
    function ShowHomeLocation(){
        header("Location: ".BASE_URL."home");
     }

    function ShowAdminLocation(){
        header("Location: ".BASE_URL."administrar");
     }


}
