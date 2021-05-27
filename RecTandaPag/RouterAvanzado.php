<?php
    require_once 'php/administrar.php';
    require_once 'RouterClass.php';

    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    
    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "administrar", "Home");
    $r->addRoute("login", "GET", "administrar", "showLogin");
    $r->addRoute("advice", "GET", "administrar", "ShowAdvice");
    $r->addRoute("reciclar", "GET", "administrar", "ShowReciclar");
    $r->addRoute("administrar", "GET", "administrar", "getCartoneros");
    $r->addRoute("detalleC/:ID", "GET", "administrar", "getCartonero");
    $r->addRoute("delete/:ID", "GET", "administrar", "deleteCartonero");

    $r->addRoute("indexAdmin", "POST", "administrar", "ShowLoginAdmin");
    
    $r->setDefaultRoute("administrar", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>
