<?php
require_once 'templates/header.tpl';
require_once 'libs/smarty/libs/Smarty.class.php';

class ecommerceView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty(); // inicializo Smarty
    }
    
    function showHome(){
        include 'templates/products.tpl';
        include 'templates/form.tpl';
        $products;
    }

    function showProductsByCategorie($products){

    }
}


require_once 'templates/footer.tpl';
