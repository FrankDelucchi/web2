<?php
require_once './libs/router.php';
require_once './app/controllers/ApiController.php';
require_once './app/controllers/ApiProductsApiController.php';


$router = new Router;

/**
 *       addroute (Resource||httpMethod||controller||methodController)
 */
$router->addRoute('productos', 'GET', 'ApiProductsController', 'get');
$router->addRoute('productos', 'POST', 'ApiProductsController', 'agregarProducto');
$router->addRoute('productos/:ID', 'GET', 'ApiProductsController', 'get');
$router->addRoute('productos/:ID', 'PUT', 'ApiProductsController', 'modificarProducto');
$router->addRoute('productos/:ID', 'DELETE', 'ApiProductsController', 'delete');

$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);