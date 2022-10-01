<?php
require_once 'album.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';
if (!empty($_GET['action'])) { // si viene definida la reemplazamos
    $action = $_GET['action'];
    }

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        showHome();
        break;
    case '':
        show5($params[0]);
        break;
    case '':
        show10($params[0]);
        break;
    default:
        echo('404 Page not found');
        break;
    }