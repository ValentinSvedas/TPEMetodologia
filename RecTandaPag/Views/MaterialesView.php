<?php

require_once('./libs/smarty/Smarty.class.php');

class MaterialesView {
    
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL',BASE_URL);
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