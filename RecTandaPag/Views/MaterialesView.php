<?php

require_once('./libs/smarty/Smarty.class.php');

class MaterialesView {
    
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL',BASE_URL);
    }

    public function DisplayMateriales() {
      $this->smarty->display('templates/reciclar.tpl');
    }

}

?>