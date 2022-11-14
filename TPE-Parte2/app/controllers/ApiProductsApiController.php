<?php

class ApiProductsController extends ApiController{
    
    private $model;

    function __construct(){
        
        parent::__construct();
        $this->model = new ProductsModel;
    }
    /**
     * Verifica si los parametros enviados por la URL coinciden con los permitidos
     */
    function allowed($some, $some2){
        $whitelist = array('producto', 'precio');
        $whitelist2 = array('asc', 'desc');
        if(in_array($some, $whitelist)&&in_array($some2, $whitelist2))
            return true;
    }

    function get($params = []) {
        /**
         * Devuelve, si existen, lista de registros ordenados por columna, ascendente o descendentemente
         */
        if((empty($params))&&isset($_GET['sort_by'])&&isset($_GET['order'])){

            if($this->allowed($_GET['sort_by'], $_GET['order'])){
                $field = $_GET['sort_by'];
                $order = $_GET['order'];
                $sortedProducts = $this->model->getAllOrderBy($field, $order);
                if(empty($sortedProducts)) {
                    return $this->view->response("Not Found", 404);
                }
                else{
                    return $this->view->response($sortedProducts, 200);
                } 
            }
            else{
                return $this->view->response("Invalid request", 400);
            }              
        }
        /**
         * Devuelve si existen, lista de registros filtrados, ordenados por columna, ascendente o descendentemente
         */
        else if(isset($params[':ID'])&&isset($_GET['sort_by'])&&isset($_GET['order'])){

            if($this->allowed($_GET['sort_by'], $_GET['order'])){
                $field = $_GET['sort_by'];
                $order = $_GET['order'];
                $id_filter = $params[':ID'];
                $filteredProducts = $this->model->getFilteredProducts($id_filter, $field, $order);
                if(empty($filteredProducts)) {
                    return $this->view->response("Not Found", 404);
                }
                else{
                    return $this->view->response($filteredProducts, 200);
                }
            }
            else{
                return $this->view->response("Invalid request", 400);
            }     
        }
        /**
         * Devuelve, si existe, un registro con ID = "n"
         */
        if(isset($params[':ID'])){

            $product_id = $params[':ID'];
            $producto = $this->model->getProductsByID($product_id);
            if(empty($producto)) {
                return $this->view->response("Product id=$product_id Not Found", 404);
            }
            else{
                return $this->view->response($producto, 200);
            }
        }
        /**
         * Devuelve la lista de registros existentes, sin modificaciones
         */
        else if(empty($params)){

            $productos = $this->model->getAllProducts();
            if(empty($productos)) {
                return $this->view->response("Not Found", 404);
            }
            else{
                return $this->view->response($productos, 200);
            }
        }
        /**
         * Control de URL's que no existen
         */
        else{
            return $this->view->response("Invalid request", 400);
        }
    }
    /**
     * Borra, si existe, un registro con id = 'n'
     */
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
    /**
     * Agrega, si todos los campos estan completos, un registro a la base de datos
     */
    function agregarProducto() {
        
        $product = $this->getData();
        
        if (empty($product->producto) || empty($product->descripcion) || empty($product->precio) || empty($product->id_categoria_fk) || empty($product->imagen)) {
            $this->view->response("Complete all the fields", 400);
        } 
        else{

            $id = $this->model->add($product->producto, $product->descripcion, $product->precio, $product->id_categoria_fk, $product->imagen);
            $product = $this->model->getProductsByID($id);
            $this->view->response($product, 201);
        }
    }
    /**
     * Modifica, si existe, un registro con id = 'n'
     */
    function modificarProducto($params = []) {
        
        $product_id = $params[':ID'];
        $singleProduct = $this->model->getProductsByID($product_id);
        
        if ($singleProduct) {

            $body = $this->getData();
            $producto = $body->producto;
            $descripcion = $body->descripcion;
            $precio = $body->precio;
            $imagen = $body->imagen;
            $singleProduct = $this->model->update($producto, $descripcion, $precio, $imagen, $product_id);
            $this->view->response("Success: Product id=$product_id Modified", 200);
        }
        else{
            $this->view->response("Product id=$product_id Not Found", 404);
        }      
    }
}