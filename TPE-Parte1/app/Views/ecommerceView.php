<?php
require_once 'libs/smarty/libs/Smarty.class.php';

class ecommerceView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    
    function showHome($products, $categories){
        
        $this->smarty->assign('products', $products);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('products.tpl'); 
    }

    function showProductsByID($singleProduct, $categories){

        $this->smarty->assign('products', $singleProduct);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('products.tpl');
    }

    function showProductsByCategorie($filteredProducts, $categories){

        $this->smarty->assign('products', $filteredProducts);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('products.tpl');
    }

    function showLogin($products, $categories, $error = null){
        
        $this->smarty->assign('products', $products);
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('error', $error);
        $this->smarty->display('formLogin.tpl');
    }

    function showAdminProducts($products, $categories, $error = null){
        
        $this->smarty->assign('products', $products);
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('error', $error);
        $this->smarty->display('adminProducts.tpl');
    }

    function showAdminCategories($products, $categories, $error = null){
        
        $this->smarty->assign('products', $products);
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('error', $error);
        $this->smarty->display('adminCategories.tpl');
    }

    function showEditAdminProducts($product, $categories){

        $this->smarty->assign('products', $product);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('editAdminProducts.tpl');
    }

    function showEditAdminCategories($singlecategorie, $categories){

        $this->smarty->assign('singleCategories', $singlecategorie);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('editAdminCategories.tpl');
    }
}



