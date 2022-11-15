<?php

class ApiProductsController extends ApiController{
    
    private $model;
    private $field;
    private $order;
    private $offset;
    private $limit;
    private $filter;
    private $whitelist1;
    private $whitelist2;
    private $whitelist3;

    function __construct(){
        
        parent::__construct();
        $this->model = new ProductsModel;
        $this->whitelist1 = array('producto', 'precio');
        $this->whitelist2 = array('asc', 'desc');
        $this->whitelist3 = array('1', '2','3','4','5');
    }
    /**
     * Funciones que recuperan y verifican datos enviados por query params
     */
    function getLimit(){
        if (isset($_GET['limit'])){
            $this->limit = $_GET['limit'];
            return $this->limit;
        }else
            $productos = $this->model->getAll();
            return count($productos);  
    }
    function getOffset(){
        if (isset($_GET['offset'])){
            $this->offset = $_GET['offset'];
            return $this->offset;
        }else
            return 0;   
    }
    function verifyPaginationValues(){
        if(is_numeric($this->getLimit())&&($this->getLimit()>=0)&&is_numeric($this->getOffset())&&($this->getOffset()>=0))
            return true;
    }
    function getField(){
        if(isset($_GET['sort_by'])){
            $this->field = $_GET['sort_by'];
            return $this->field;
        } 
        else
            return null;
    }
    function verifyField(){
        if(in_array($this->getField(), $this->whitelist1)&&$this->getField()!=null)
            return true;
        else
            return false;
    }
    function getOrder(){
        if(isset($_GET['order'])){
            $this->order = $_GET['order'];
            return $this->order;
        } 
        else
            return "asc";  
    }
    function verifyOrder(){
        if(in_array($this->getOrder(), $this->whitelist2))
            return true;
        else
            return false;
    }
    function getFilter(){
        if(isset($_GET['filter'])){
            $this->filter = $_GET['filter'];
            return $this->filter;
        }
        else
            return null;     
    }
    function verifyFilter(){
        if(in_array($this->getFilter(), $this->whitelist3))
            return true;
    }
    
    function get() {
        /**
         * Devuelve, si existen, lista de registros ordenados por columna, ascendente o descendentemente
         */
        if($this->getFilter() == null){

            if($this->verifyField()&&$this->verifyOrder()){
                $sortedProducts = $this->model->getAllOrderBy($this->getField(), $this->getOrder());
                if(empty($sortedProducts)){
                    return $this->view->response("404 - Not Found", 404);
                }
                else{
                    if($this->verifyPaginationValues()){
                        return $this->view->response(array_slice($sortedProducts, $this->getOffset(), $this->getLimit()), 200);
                    }
                    else{
                        return $this->view->response("400 - Bad request", 400);
                    }  
                }
            }
            else{//Si no hay query params devuelve la lista en su estado original
                $products = $this->model->getAll();
                if(empty($products)){
                    return $this->view->response("404 - Not Found", 404);
                }
                else{
                    if($this->verifyPaginationValues()){
                        return $this->view->response(array_slice($products, $this->getOffset(), $this->getLimit()), 200);
                    }
                    else{
                        return $this->view->response("400 - Bad request", 400);
                    }  
                }
            }
        }             
        /**
         * Devuelve si existen, lista de registros filtrados, ordenados por columna, ascendente o descendentemente
         */
        else{
            if($this->verifyFilter()&&$this->getField()&&$this->getOrder()){

                if($this->verifyField()&&$this->verifyOrder()){
                    $filteredProductsOrder = $this->model->getOrderedFilterProducts($this->getFilter(), $this->getField(), $this->getOrder());
                    if(empty($filteredProductsOrder)) {
                        return $this->view->response("404 - Not Found", 404);
                    }
                    else{
                        if($this->verifyPaginationValues()){
                            return $this->view->response(array_slice($filteredProductsOrder, $this->getOffset(), $this->getLimit()), 200);
                        }    
                        else
                            return $this->view->response("400 - Bad request", 400);
                    }
                }
                else
                    return $this->view->response("400 - Bad request", 400);        
            }
            else{//Si no hay query params devuelve la lista, filtrada, en su estado original
                if($this->verifyFilter()){
                    $filteredProducts = $this->model->getFilteredProducts($this->getFilter());
                    if(empty($filteredProducts)){
                        return $this->view->response("404 - Not Found", 404);
                    }
                    else{
                        if($this->verifyPaginationValues()){
                            return $this->view->response(array_slice($filteredProducts, $this->getOffset(), $this->getLimit()), 200);
                        }    
                        else
                            return $this->view->response("400 - Bad request", 400);
                    } 
                }
                else
                    return $this->view->response("400 - Bad request", 400);
            }
        }    
    }

    /**
     * Devuelve, si existe, un registro con ID = "n"
     */
    function getByID($params = null){

        if(isset($params[':ID'])){

            $product_id = $params[':ID'];
            $producto = $this->model->getProductsByID($product_id);
            if(empty($producto)) {
                return $this->view->response("404 - Product id=$product_id Not Found", 404);
            }
            else{
                return $this->view->response($producto, 200);
            }
        }
    }
        
    /**
     * Borra, si existe, un registro con id = 'n'
     */
    function delete($params = null) {
        
        $product_id = $params[':ID'];
        $singleProduct = $this->model->getProductsByID($product_id);
        
        if ($singleProduct) {

            $this->model->delete($product_id);
            $this->view->response("Success: Product id=$product_id Deleted", 200);
        }
        else{
            $this->view->response("404 - Product id=$product_id Not Found", 404);
        }
    }

    /**
     * Agrega, si todos los campos estan completos, un registro a la base de datos
     */
    function agregarProducto() {
        
        $product = $this->getData();
        
        if (empty($product->producto) || empty($product->descripcion) || empty($product->precio) || empty($product->id_categoria_fk) || empty($product->imagen)) {
            $this->view->response("400 - Bad request! Complete all the fields", 400);
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
    function modificarProducto($params = null) {
        
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
            $this->view->response("404 - Product id=$product_id Not Found", 404);
        }      
    }
}

                    /*var_dump($this->getFilter());
                    var_dump($this->verifyFilter());
                    var_dump($this->getField());
                    var_dump($this->verifyField());
                    var_dump($this->getOrder());
                    var_dump($this->verifyOrder());*/