<?php
require_once 'app/models/productsModel.php';
require_once 'app/views/ecommerceView.php';
require_once 'app/models/categoriesModel.php';

class ecommerceController {
    private $model;
    private $view;

    function __construct() {
        $this->model = new productsModel();
        $this->model1 = new categoriesModel();
        $this->view = new ecommerceView();
    }

    function showProducts(){
        $products = $this->model->getAll();
        $this->view-> showHome($products);   
    }

    function getProductByCategorie($categoria){
        $filteredProducts = $this->model->getProductsByFk($categoria);
        $this->view->showProductsByCategorie($filteredProducts);
        
    }
}
