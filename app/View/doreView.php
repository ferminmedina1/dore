<?php

require_once("./libs/smarty/Smarty.class.php");

class doreView{

    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign('base_url', BASE_URL);
    }

    function showHome(){
        $this->smarty->display("../templates/home.tpl");
    }

    function showStockPage(){
        $this->smarty->display("../templates/stock.tpl");
    }

    function showHistoryPage(){
        $this->smarty->display("../templates/history.tpl");
    }

    function showAdminPage(){
        $this->smarty->display("../templates/admin.tpl");
    }
}