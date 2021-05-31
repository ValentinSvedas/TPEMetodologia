<?php

require_once('./libs/smarty/Smarty.class.php');

class CiudadanoView {
    
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL',BASE_URL);
    }

    public function DisplayCiudadanos() {
      $this->smarty->display('templates/reciclar.tpl');
    }

}

?>