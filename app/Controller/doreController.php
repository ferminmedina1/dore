<?php

require_once("./app/View/doreView.php");
require_once("./app/Helper/userHelper.php");

class doreController{

    private $view,$helper;

    function __construct()
    {
        $this->view = new doreView();
        $this->helper = new userHelper();
        $this->helper->checkUserSession();
    }

    function Home(){
        $this->view->showHome();
    }

    function StockPage(){
        $this->view->showStockPage();
    }

    function HistoryPage(){
        $this->view->showHistoryPage();
    }

    function AdminPage(){
        if($_SESSION["admin"] == 1){
            $this->view->showAdminPage();
        }
    }

}