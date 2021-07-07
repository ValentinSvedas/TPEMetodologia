<?php

class AuthHelper{

    public function __construct() {}

    public function login($user) {
        session_start();
        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['EMAIL'] = $user->email;
        $_SESSION['LAST_ACTIVITY'] = time();
    }

    public function logout() {
        session_start();
        session_destroy();
    }

    public function checkLoggedIn() {// chekea que este logeado
        if (!isset($_SESSION['ID_USER'])) {
            header("Location: ".BASE_URL."home");
            die();
        } else{
            if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 600)) { 
                header("Location: ". LOGOUT);
                die();
            } 
            $_SESSION['LAST_ACTIVITY'] = time();
        }    
    }


    public function checkUser(){ // si es usario, en este caso admin
        if (session_status() != PHP_SESSION_ACTIVE)
        session_start();
        if(isset($_SESSION['ID_USER'])){
            return true;
        }else{
            return false;
        }
    }
}


?>