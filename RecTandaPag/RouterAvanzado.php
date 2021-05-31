<?php
    require_once 'Controllers/administrar.php';
    require_once 'Controllers/PedidoController.php';
    require_once 'RouterClass.php';

    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    
    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "administrar", "Home");
    $r->addRoute("login", "GET", "administrar", "showLogin");
    $r->addRoute("advice", "GET", "administrar", "ShowAdvice");
    $r->addRoute("reciclar", "GET", "administrar", "ShowReciclar");
    $r->addRoute("añadirC", "GET", "administrar", "ShowAñadirCartonero");
    $r->addRoute("administrar", "GET", "administrar", "getCartoneros"); 
    $r->addRoute("detalleC/:ID", "GET", "administrar", "getCartonero");
    $r->addRoute("delete/:ID", "GET", "administrar", "deleteCartonero");
    $r->addRoute("editar/:ID", "GET", "administrar", "EditCartonero");
    $r->addRoute("editar/editcartonero", "POST", "administrar", "Edit");
    $r->addRoute("añadircartonero", "POST", "administrar", "addCartonero");
    $r->addRoute("advice", "POST", "PedidoController", "addPedido");


    // Login
    $r->addRoute("indexAdmin", "POST", "administrar", "ShowLoginAdmin");
    
    // RUTA POR DEFECTO
    $r->setDefaultRoute("administrar", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>
