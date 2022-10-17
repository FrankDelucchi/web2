<?php

class categoriesModel{
        
    private $db;
    
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe_parte1;charset=utf8', 'root', '');
    }

    function getAllCategories(){
        
        $query = $this->db->prepare("SELECT * FROM categorias");
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);

        return $categories;
    }

    function getCategoriesByID($id){
        
        $query = $this->db->prepare("SELECT * FROM categorias WHERE id_categoria='$id';");
        $query->execute();
        $singleCategorie = $query->fetchAll(PDO::FETCH_OBJ);

        return $singleCategorie;
    }

    function add($categoria){

        $query = $this->db->prepare("INSERT INTO categorias(categoria) VALUES(?)");
        $query->execute([$categoria]);

        return $this->db->lastInsertId();
    }

    function delete($id_categoria){
        $query = $this->db->prepare("DELETE FROM categorias WHERE id_categoria = '$id_categoria';");
        $query->execute();
    }

    function update($id, $categoria){
        $query = $this->db->prepare("UPDATE `categorias` SET `categoria` = '$categoria' WHERE `categorias`.`id_categoria` = ?;");
        $query->execute([$id]);
    }
}