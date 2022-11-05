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
            return $this->view->response($productos,200);
        }
        else {
            $producto = $this->model->getProductsByID($params[":ID"]);
            if(!empty($producto)) {
                return $this->view->response($producto,200);
            }
        }

    }

    public function deleteProduct($params = []) {
        
        $product_id = $params[':ID'];
        $singleProduct = $this->model->getProductsByID($product_id);
        
        if ($singleProduct) {
            $this->model->delete($singleProduct);
            $this->view->response("Producto id=$singleProduct eliminado con éxito", 200);
        }
        else
            $this->view->response("Product id=$singleProduct not found", 404);
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

    public function updateTask($params = []) {
        
        $product_id = $params[':ID'];
        $singleProduct = $this->model->getProductsByID($product_id);
        
        if ($singleProduct) {
            $body = $this->getData();
            $id_producto = $body->id_producto;
            $producto = $body->producto;
            $descripcion = $body->descripcion;
            $precio = $body->precio;
            $imagen = $body->imagen;
            $singleProduct = $this->model->update($id_producto, $producto, $descripcion, $precio, $imagen);
            $this->view->response("Tarea id=$product_id actualizada con éxito", 200);
        }
        else
            $this->view->response("Task id=$product_id not found", 404);
        }
}