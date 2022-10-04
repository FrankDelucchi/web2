<?php
require_once 'templates/header.tpl';
require_once 'libs/smarty/libs/Smarty.class.php';

class ecommerceView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty(); // inicializo Smarty
    }
    
    function showHome($products){
        
        $this->smarty->assign('producto', $products);

        $this->smarty->display('products.tpl');
        include 'templates/form.tpl';
    }

    function showProductsByCategorie($products){

    }
}


require_once 'templates/footer.tpl';
