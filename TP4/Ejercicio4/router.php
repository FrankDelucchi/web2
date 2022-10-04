<?php
require_once 'app/Controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'lista';
if (!empty($_GET['action'])) { // si viene definida la reemplazamos
    $action = $_GET['action'];
    }

$params = explode('/', $action);

$controller = new controller();

switch ($params[0]) {
    case 'lista':
        $controller->showLista();
        break;
    case 'producto':
        //$controller->showProduct($params[1]);
        break;
    case '':
        break;
    default:
        echo('404 Page not found');
        break;
    }