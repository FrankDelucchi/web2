<?php
require_once 'app/models/productsModel.php';
require_once 'app/views/ecommerceView.php';
require_once 'app/models/categoriesModel.php';

class ecommerceController {
    private $model;
    private $view;

    function __construct() {
        $this->model = new productsModel();
        $this->model = new categoriesModel();
        $this->view = new ecommerceView();
    }

    function showProducts(){
        $this->view-> showHome();   
    }
}
