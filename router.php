<?php
    require_once('app/Controller/doreController.php');
    require_once('app/Controller/userController.php');
    require_once('routerClass.php');
    
 // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

    $r = new Router();

 //NAVEGACION EN LA PAGINA
    $r->addRoute("home", "GET", "doreController", "Home");
    $r->addRoute("history", "GET", "doreController", "HistoryPage");
    $r->addRoute("stock", "GET", "doreController", "StockPage");



//Admin routes
   $r->addRoute("admin", "GET", "doreController", "AdminPage");    



    //USER ROUTES
    $r->addRoute("login", "GET", "userController", "Login");
    $r->addRoute("register", "GET", "userController", "Register");
    $r->addRoute("verifyUser", "POST", "userController", "VerifyUser");
    $r->addRoute("logout", "GET", "userController", "logout");

     //Ruta por defecto.
     $r->setDefaultRoute("doreController", "Home");

    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>