<?php
require_once 'app/controllers/ecommerceController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';
if (!empty($_GET['action'])) { // si viene definida la reemplazamos
    $action = $_GET['action'];
    }

$params = explode('/', $action);

$controller = new ecommerceController();


switch ($params[0]) {
    case 'home':
        $controller->showProducts();
        break;
    case '':
        
        break;
    case '':
        
        break;
    default:
        //echo('404 Page not found');
        break;
    }