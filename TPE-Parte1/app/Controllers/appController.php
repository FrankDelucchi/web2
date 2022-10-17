<?php
require_once 'app/Models/productsModel.php';
require_once 'app/Models/categoriesModel.php';
require_once 'app/Models/usersModel.php';
require_once 'app/Views/ecommerceView.php';

class appController {
    
    protected $productsModel;
    protected $categoriesModel;
    protected $usersModel;
    protected $view;
    protected $products;
    protected $categories;

    function __construct() {
        
        //session_start();
        $this->productsModel = new productsModel();
        $this->categoriesModel = new categoriesModel();
        $this->usersModel = new usersModel();
        $this->view = new ecommerceView();
        $this->products = $this->productsModel->getAllProducts();
        $this->categories = $this->categoriesModel->getAllCategories();
    }

    protected function checkActiveSession(){
        
        session_start();
        if(!isset($_SESSION['LOGUED'])){

            header('Location: ' . BASE_URL . 'login');

            die();
        }
    }
}