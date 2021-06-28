<?php

require_once "./Views/LoginView.php";
require_once "./php/LoginModel.php";
require_once "./helpers/authHelper.php";

class LoginController{

    private $view;
     private $model;
     private $authHelper;

    function __construct(){
        $this->view = new LoginView();
        $this->model = new LoginModel();
        $this->authHelper = new AuthHelper();
    }

    function Login(){
        $this->view->ShowLogin();
    }

    function Logout(){
        $this->authHelper->logout();
        header("Location: ".home);
    }

    function VerifyUser(){
        $user = $_POST["input_user"];
        $pass = $_POST["input_pass"];
        if(isset($user)){
            $userDB = $this->model->GetUser($user);
            if(isset($userDB) && $userDB){
                // Existe el usuario
                if (password_verify($pass, $userDB->password)){
                    $this->authHelper->login($userDB);
                    header("Location: ".BASE_URL."administrar");
                }else{
                    $this->view->ShowLogin("Contraseña incorrecta");
                }
            }else{
                // No existe el user en la DB
                $this->view->ShowLogin("El administrador no exite");
            }
        }
    }
    
} 
?>