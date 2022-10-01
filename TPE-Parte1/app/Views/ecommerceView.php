<?php
require_once 'templates/header.tpl';
require_once 'libs/smarty/libs/Smarty.class.php';

class ecommerceView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty(); // inicializo Smarty
    }
    
    function showHome(){
        include 'templates/form.html';
    }
}


require_once 'templates/footer.tpl';
