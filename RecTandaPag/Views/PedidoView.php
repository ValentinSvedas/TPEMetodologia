<?php

require_once('./libs/smarty/Smarty.class.php');
require_once "./helpers/authHelper.php";


class PedidoView {
    
    private $smarty;
    private $admin;


    function __construct(){
        $this->smarty = new Smarty();
        $this->admin = new AuthHelper();
        $this->smarty->assign('BASE_URL',BASE_URL);
        $this->smarty->assign('loged', $this->admin->checkUser());

    }

    public function DisplayPedidos($pedidos) {
      $this->smarty->assign('pedidos',$pedidos);
      $this->smarty->assign('loged', $this->admin->checkUser());
      $this->smarty->display('templates/reciclar.tpl');
    }

    // public function mostrarError(){
    //   $this->smarty->display('index.tpl');
    // }

    public function mostrarResultado(){
      $this->smarty->assign('loged', $this->admin->checkUser());
      $this->smarty->display('templates/reciclar.tpl');
    }

    public function DisplayPedidosAdmin($pedidos = []){
      $this->smarty->assign('loged', $this->admin->checkUser());
      $this->smarty->assign('pedidos',$pedidos);
      $this->smarty->display('templates/pedidosAdmin.tpl');
    }

}

?>