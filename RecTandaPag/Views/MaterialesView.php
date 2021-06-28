<?php

require_once('./libs/smarty/Smarty.class.php');
require_once "./helpers/authHelper.php";

class MaterialesView {
    
    private $smarty;
    private $admin;

    function __construct(){
        $this->smarty = new Smarty();
        $this->admin = new AuthHelper();
        $this->smarty->assign('BASE_URL',BASE_URL);
        $this->smarty->assign('loged', $this->admin->checkUser());
    }

    public function DisplayMateriales($materiales = []) {
      $this->smarty->assign('materiales',$materiales);
      $this->smarty->display('templates/materiales.tpl');
    }

    public function DisplayEditMaterial($material = []){
      $this->smarty->assign('material',$material);
      $this->smarty->display('templates/materialesEdit.tpl');
    }

}

?>