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
        
        $query = $this->db->prepare("SELECT products.*, categoria.* FROM products INNER JOIN categoria ON products.id_categoria_fk=categoria.id_categoria WHERE categoria.categoria='$filter';");
        $query->execute();

        $filteredProducts = $query->fetchAll(PDO::FETCH_OBJ);

        return $filteredProducts;
    }

    function getProductsByID($id){
        
        $query = $this->db->prepare("SELECT * FROM products WHERE id_producto='$id';");
        $query->execute();

        $singleProduct = $query->fetchAll(PDO::FETCH_OBJ);

        return $singleProduct;
    }

    function add($producto, $descripcion, $precio,$id_categoria_fk, $imagen){

        $query = $this->db->prepare("INSERT INTO products(producto, descripcion, precio, id_categoria_fk, imagen) VALUES(?,?,?,?,?)");
        $query->execute([$producto, $descripcion, $precio,$id_categoria_fk, $imagen]);

        return $this->db->lastInsertId();
    }

    function delete($id_producto){
        $query = $this->db->prepare("DELETE FROM products WHERE id_producto = '$id_producto';");
        $query->execute();
    }

    function update(){

    }

}