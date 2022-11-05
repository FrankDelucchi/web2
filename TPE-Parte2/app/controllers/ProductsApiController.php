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
                return $this->view->response($productos, 404);
            }
            else{
                return $this->view->response($productos, 200);
            }
        }
        else {
           
            $producto = $this->model->getProductsByID($params[":ID"]);
            if(empty($producto)) {
                return $this->view->response($producto, 404);
            }
            else{
                return $this->view->response($producto, 200);
            }
        }

    }

    public function delete($params = null) {
        
        $product_id = $params[':ID'];
        $singleProduct = $this->model->getProductsByID($product_id);
        
        if ($singleProduct) {
            $this->model->delete($product_id);
            $this->view->response("Producto id=$product_id eliminado con éxito", 200);
        }
        else
            $this->view->response("Product id=$product_id not found", 404);
        }

    public function agregarProducto($params = null) {
        
        // devuelve el objeto JSON enviado por POST
        $product = $this->getData();
        
        // inserta el producto
        if (empty($product->producto) || empty($product->descripcion) || empty($product->precio) || empty($product->id_categoria_fk) || empty($product->imagen)) {
            $this->view->response("Complete los datos", 400);
        } 
        else {
            $id = $this->model->add($product->producto, $product->descripcion, $product->precio, $product->id_categoria_fk, $product->imagen);
            $product = $this->model->getProductsByID($id);
            $this->view->response($product, 201);
        }

        }

    public function modificarProducto($params = []) {
        
        $product_id = $params[':ID'];
        $singleProduct = $this->model->getProductsByID($product_id);
        
        if ($singleProduct) {
            $body = $this->getData();
            //$id_producto = $body->id_producto;
            $producto = $body->producto;
            $descripcion = $body->descripcion;
            $precio = $body->precio;
            $imagen = $body->imagen;
            $singleProduct = $this->model->update($product_id, $producto, $descripcion, $precio, $imagen);
            $this->view->response("Tarea id=$product_id actualizada con éxito", 200);
        }
        else
            $this->view->response("Task id=$product_id not found", 404);
        }
}