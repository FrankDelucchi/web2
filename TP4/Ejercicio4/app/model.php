<?php
include 'db_fake.php';
class model{

    function __construct() {
        //$this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe_parte1;charset=utf8', 'root', '');   
    }

    function getAll(){
        $fake_products = getProductosLimpieza();
        return $fake_products;
    }
}