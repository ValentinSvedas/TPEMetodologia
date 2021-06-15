<?php

require_once('./libs/smarty/Smarty.class.php');

class PedidoView {
    
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL',BASE_URL);
    }

    public function DisplayPedidos($pedidos) {
      $this->smarty->assign('pedidos',$pedidos);
      $this->smarty->display('templates/reciclar.tpl');
    }

    public function mostrarError(){
      $this->smarty->display('index.tpl');
    }

    public function mostrarResultado(){
      $this->smarty->display('templates/reciclar.tpl');
    }

    public function DisplayPedidosAdmin($pedidos = []){
      $this->smarty->assign('pedidos',$pedidos);
      $this->smarty->display('templates/pedidosAdmin.tpl');
    }

}

?>