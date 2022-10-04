<?php
require_once 'model.php';
require_once 'view.php';

class controller{
    private $model;
    private $view;

    function __construct(){
        $this->model=new model();
        $this->view=new view();
    }

    function showLista(){
        $listaProductos = $this->model->getAll();
        $this->view->showHome($listaProductos);
    }
    /*function showProduct($producto){
        $productos = $this->model->getAll();
        $this->view->showProducto($producto);
    }
    */
}