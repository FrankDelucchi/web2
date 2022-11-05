<?php
require_once './libs/router.php';
require_once './app/controllers/ApiController.php';
require_once './app/controllers/ProductsApiController.php';


$router = new Router;

/**
 *       addroute (Resource||httpMethod||controller||methodController)
 */
$router->addRoute('productos', 'GET', 'ProductsApiController', 'get');
$router->addRoute('productos', 'POST', 'ProductsApiController', 'agregarProducto');
$router->addRoute('productos/:ID', 'GET', 'ProductsApiController', 'get');
$router->addRoute('productos/:ID', 'PUT', 'ProductsApiController', 'modificarProducto');
$router->addRoute('productos/:ID', 'DELETE', 'ProductsApiController', 'delete');

$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);