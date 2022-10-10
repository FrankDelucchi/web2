<?php
require_once 'libs/smarty/libs/Smarty.class.php';

class ecommerceView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty(); // inicializo Smarty
    }
    
    function showHome($products){
        
        $this->smarty->assign('products', $products);
        $this->smarty->display('products.tpl');
    }

    function listCategories($categories){
        
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('categories.tpl');
    }

    function showProductsByCategorie($products){

        $this->smarty->assign('products', $products);
        $this->smarty->display('products.tpl');
    }

    function showHomeAdmin($products){
        
        $this->smarty->assign('products', $products);
        $this->smarty->display('admin.tpl');
    }
}



