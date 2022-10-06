<?php

class productsModel{
    
    private $db;
    
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe_parte1;charset=utf8', 'root', '');
    }

    function getAll(){
        $query = $this->db->prepare("SELECT * FROM products");
        $query->execute();

        $products = $query->fetchAll(PDO::FETCH_OBJ);

        return $products;
    }

    function getProductsByFk($filter){
        
        $query = $this->db->prepare("SELECT products.producto, categoria.categoria FROM products INNER JOIN categoria ON products.id_categoria_fk=categoria.id_categoria WHERE categoria.categoria='$filter';");
        $query->execute();

        $filteredProducts = $query->fetchAll(PDO::FETCH_OBJ);

        return $filteredProducts;
    }

}