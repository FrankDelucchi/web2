<?php
require_once('Lista.php');

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'lista';
if (!empty($_GET['action'])) { // si viene definida la reemplazamos
    $action = $_GET['action'];
    }

$params = explode('/', $action);

switch ($params[0]) {
    case 'lista':
        showHome($lista);
        break;
    case 'ver 5':
        show5($params[1], $lista);
        break;
    case 'ver 10':
        show10($params[1], $lista);
        break;
    default:
        echo('404 Page not found');
        break;
    }