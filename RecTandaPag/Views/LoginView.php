<?php

require_once "./libs/smarty/Smarty.class.php";



class LoginView{

    private $smarty;
    

    function __construct(){
        $this->smarty = new Smarty();
    }

    function ShowLogin($message = ""){
        $this->smarty->assign('message', $message);
        $this->smarty->display('templates/login.tpl'); // muestro el template 
    }
}


?>