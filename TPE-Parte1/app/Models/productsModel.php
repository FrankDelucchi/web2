<?php

class productsModel{
    
    private $db;
    
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe_parte1;charset=utf8', 'root', '');
    }

    //Devuelve la tabla principal
    function getAllProducts(){
        
        $query = $this->db->prepare("SELECT * FROM products");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);

        return $products;
    }

    //Devuelve productos de la tabla principal filtrados por categoria
    function getProductsByFk($filter){
        
        $query = $this->db->prepare("SELECT products.* FROM products INNER JOIN categorias ON products.id_categoria_fk=categorias.id_categoria WHERE categorias.categoria='$filter';");
        $query->execute();
        $filteredProducts = $query->fetchAll(PDO::FETCH_OBJ);

        return $filteredProducts;
    }

    //Busca en la tabla principal un producto segun su ID y lo devuelve
    function getProductsByID($id){
        
        $query = $this->db->prepare("SELECT * FROM products WHERE id_producto='$id';");
        $query->execute();
        $singleProduct = $query->fetchAll(PDO::FETCH_OBJ);

        return $singleProduct;
    }

    ////Busca en la tabla principal un producto segun su nombre y lo devuelve
    function getProductsByName($product){
        
        $query = $this->db->prepare("SELECT * FROM products WHERE producto='$product';");
        $query->execute();
        $product = $query->fetchAll(PDO::FETCH_OBJ);

        return $product;
    }

    //Agrega un producto a la tabla principal
    function add($producto, $descripcion, $precio,$id_categoria_fk, $imagen){

        $query = $this->db->prepare("INSERT INTO products(producto, descripcion, precio, id_categoria_fk, imagen) VALUES(?,?,?,?,?)");
        $query->execute([$producto, $descripcion, $precio,$id_categoria_fk, $imagen]);

        return $this->db->lastInsertId();
    }

    //Borra un producto de la tabla principal por su ID
    function delete($id_producto){
        $query = $this->db->prepare("DELETE FROM products WHERE id_producto = '$id_producto';");
        $query->execute();
    }

    //Modifica un producto de la tabla principal por su ID
    function update($id_producto, $producto, $descripcion, $precio, $imagen){
        $query = $this->db->prepare("UPDATE `products` SET `producto` = '$producto', `descripcion` = '$descripcion', `precio` = '$precio', `imagen` = '$imagen' WHERE `products`.`id_producto` = ?;");
        $query->execute([$id_producto]);
    }
}