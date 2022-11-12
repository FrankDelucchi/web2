<?php

class ProductsApiController extends ApiController{
    
    protected $model;
    protected $view;

    function __construct(){
        
        parent::__construct();
        $this->model = new ProductsModel;
        
    }

    function get($params = []) {

        if(empty($params)){
            
            $productos = $this->model->getAllProducts();
            if(empty($productos)) {
                return $this->view->response("Not Found", 404);
            }
            else{
                return $this->view->response($productos, 200);
            }
        }
        else {

            $product_id = $params[':ID'];
            $producto = $this->model->getProductsByID($product_id);
            if(empty($producto)) {
                return $this->view->response("Product id=$product_id Not Found", 404);
            }
            else{
                return $this->view->response($producto, 200);
            }
        }
    }

    function delete($params = []) {
        
        $product_id = $params[':ID'];
        $singleProduct = $this->model->getProductsByID($product_id);
        
        if ($singleProduct) {

            $this->model->delete($product_id);
            $this->view->response("Success: Product id=$product_id Deleted", 200);
        }
        else{

            $this->view->response("Product id=$product_id Not Found", 404);
        }
    }

    function agregarProducto() {
        
        $product = $this->getData();
        
        if (empty($product->producto) || empty($product->descripcion) || empty($product->precio) || empty($product->id_categoria_fk) || empty($product->imagen)) {
            $this->view->response("Complete all the fields", 400);
        } 
        else {

            $id = $this->model->add($product->producto, $product->descripcion, $product->precio, $product->id_categoria_fk, $product->imagen);
            $product = $this->model->getProductsByID($id);
            $this->view->response($product, 201);
        }
    }

    function modificarProducto($params = []) {
        
        $product_id = $params[':ID'];
        $singleProduct = $this->model->getProductsByID($product_id);
        
        if ($singleProduct) {

            $body = $this->getData();
            $producto = $body->producto;
            $descripcion = $body->descripcion;
            $precio = $body->precio;
            $imagen = $body->imagen;
            $singleProduct = $this->model->update($product_id, $producto, $descripcion, $precio, $imagen);
            $this->view->response("Success: Product id=$product_id Modified", 200);
        }
        else{

            $this->view->response("Product id=$product_id Not Found", 404);
        }      
    }
}