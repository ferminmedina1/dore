<?php

require_once("./app/View/doreView.php");
require_once("./app/View/userView.php");
require_once("./app/Model/userModel.php");
require_once("./app/Helper/userHelper.php");

class userController{

    private $view, $doreView, $model,$helper;

    function __construct()
    {
        $this->view = new userView();
        $this->model = new userModel();
        $this->doreView = new doreView();
        $this->helper = new userHelper();
    }

    function Login(){
        $this->view->showLog();
    }

     //VERIFICA QUE EL USUARIO EXISTA
     function VerifyUser(){
        $user = $_POST["input_user"];
        $pass = $_POST["input_pass"];

        if(isset($user)){
            $userFromDB = $this->model->GetUser($user);
            if(isset($userFromDB) && $userFromDB){ //PREGUNTAR SOBRE ESTE &&

                if (password_verify($pass, $userFromDB->pass)){ 

                    session_start();    //SE INICIA UNA SESION
                    $_SESSION["user"] = $userFromDB->nombre;    //SE TRAE EL user DEL USUARIO DESDE LA DB
                    $_SESSION["admin"] = $userFromDB->admin;    //SE TRAE EL ROL DEL USUARIO DESDE LA DB
                    $_SESSION["email"] = $userFromDB->email;    //SE TRAE EL ROL DEL USUARIO DESDE LA DB
                    $_SESSION["id_user"] = $userFromDB->id;
                    setcookie("id_user", $userFromDB->id); //SE CREA UNA COOKIE "id_user"

                    session_start();
                    header("Location: ".BASE_URL."stock");
                }
                else{  //SI LA CONTRASEÑA ES INCORRECTA
                    $this->view->ShowLog("Contraseña incorrecta");
                }

            }
            else{      //SI EL USUARIO NO EXISTE EN LA DB
                $this->view->ShowLog("El usuario no existe"); 
            }
        }
    }


    function Register(){
        $user = "ferminmedina1";
        $email = "ferminmedina2002@gmail.com";
        $pass_input = "682201";
        $rol = 1;
        $hash = password_hash($pass_input, PASSWORD_DEFAULT);

        $this->model->addUserDB($user,$hash,$rol,$email);
    }

     //CIERRA LA SESION
    function logout(){
        session_start();
        session_destroy();
        if (isset($_COOKIE['id_user']))        //SI ESTA SETEADA LA VARIABLE 
            setcookie("id_user", "", time() - 1 );  //SE ELIMINA
        
            header("Location: ".BASE_URL."home");
    }

    private function checkLoggedIn(){
        session_start();                    //SE INICIA UNA SESION
        if(!isset($_SESSION["user"])){     //SI NO ESTA SETEADO EL user (NO HAY USUARIO LOGUEADO)
            $_SESSION["admin"] = 0;
        }
    }
}