<?php
    require_once 'Controllers/administrar.php';
    require_once 'Controllers/PedidoController.php';
    require_once 'Controllers/MaterialesController.php';
    require_once 'RouterClass.php';

    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("ADMIN_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/administrar');
    define("ADMIN_MATERIALES_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/administrar/materiales');
    // recurso solicitado
    $resource = $_GET["action"];

    // método utilizado
    $method = $_SERVER["REQUEST_METHOD"];


    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "administrar", "Home");
    $r->addRoute("login", "GET", "administrar", "showLogin");
    $r->addRoute("advice", "GET", "administrar", "ShowAdvice");
    $r->addRoute("reciclar", "GET", "administrar", "ShowReciclar");
    $r->addRoute("añadirC", "GET", "administrar", "ShowAñadirCartonero");
    $r->addRoute("administrar", "GET", "administrar", "getCartoneros");
    $r->addRoute("administrar/materiales", "GET", "administrar", "ShowMateriales");
    $r->addRoute("administrar/nuevoMaterial", "POST", "administrar", "NuevoMaterial");
    $r->addRoute("administrar/borrarMaterial/:id", "GET", "administrar", "BorrarMaterial");
    $r->addRoute("detalleC/:ID", "GET", "administrar", "getCartonero");
    $r->addRoute("delete/:ID", "GET", "administrar", "deleteCartonero");
    $r->addRoute("editar/:ID", "GET", "administrar", "EditCartonero");
    $r->addRoute("editar/editcartonero", "POST", "administrar", "Edit");
    $r->addRoute("agregarCartonero", "POST", "administrar", "addCartonero");
    $r->addRoute("advice", "POST", "PedidoController", "addPedido");


    // Login
    $r->addRoute("indexAdmin", "POST", "administrar", "ShowLoginAdmin");
    
    // RUTA POR DEFECTO
    $r->setDefaultRoute("administrar", "Home");

    //run
    $r->route($resource, $method);
?>
