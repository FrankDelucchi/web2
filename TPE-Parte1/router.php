<?php

require_once 'app/controllers/appController.php';
require_once 'app/Controllers/productsController.php';
require_once 'app/Controllers/cateogoriesController.php';
require_once 'app/Controllers/sessionController.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
    }

$params = explode('/', $action);

$productsController = new productsController();
$categoriesController = new categoriesController();
$sessionController = new sessionController();

switch ($params[0]) {

    //Vista y acceso publico

    case 'home':
        $productsController->showProducts();
        break;

    case 'categorias':
        $id = $params[1];
        $productsController->getProductByCategorie($id);
        break;

    case 'producto':
        $productsController->getSingleProduct($params[1]);
        break;

    //ABM productos

    case 'addProduct':
        $productsController->addProduct();
        break;

    case 'deleteProduct':
        $productsController->deleteProduct($params[1]);
        break;

    case 'editProduct':
        $productsController->editProduct($params[1]);
        break;

    case 'updateProduct':
        $productsController->modifyProduct($params[1]);
        break;

    //ABM categorias

    case 'addCategorie':
        $categoriesController->addCategorie();
        break;

    case 'deleteCategorie':
        $categoriesController->deleteCategorie($params[1]);
        break;

    case 'editCategorie':
        $categoriesController->editCategorie($params[1]);
        break;

    case 'updateCategorie':
        $categoriesController->modifyCategorie($params[1]);
        break;

    //Vista administrador
    
    case 'login':

        if($_SERVER['REQUEST_METHOD'] == 'POST')
            $sessionController->showAdmin();
        else
            $sessionController->login();
        break;

    case 'adminProducts':
        $sessionController->showAdminProducts();
        break;

    case 'adminCategories':
        $sessionController->showAdminCategories();
        break;

    case 'exit':
        $sessionController->logout();
        break;
    
    default:
        echo('404 Page not found');
        break;
    }