<?php

require_once('./libs/smarty/Smarty.class.php');
require_once "./helpers/authHelper.php";

class AcopioView {
    
    private $smarty;
    private $admin;

    function __construct(){
        $this->smarty = new Smarty();
        $this->admin = new AuthHelper();
        $this->smarty->assign('BASE_URL',BASE_URL);
        $this->smarty->assign('loged', $this->admin->checkUser());
    }

    public function DisplayAcopiosAdmin($acopios = []) {
      $this->smarty->assign('acopios',$acopios);
      $this->smarty->display('templates/acopios.tpl');
    }

}

?>