<?php

require_once('./libs/smarty/Smarty.class.php');
require_once "./helpers/authHelper.php";


class CartoneroView {
    
    private $smarty;
    private $admin;


    function __construct(){
        $this->smarty = new Smarty();
        $this->admin = new AuthHelper();
        $this->smarty->assign('BASE_URL',BASE_URL);
        $this->smarty->assign('loged', $this->admin->checkUser());

    }

    public function DisplayCartonerosAdmin($cartoneros = []){
      $this->smarty->assign('loged', $this->admin->checkUser());
      $this->smarty->assign('cartoneros',$cartoneros);
      $this->smarty->display('templates/cartonerosAdmin.tpl');
    }

}

?>