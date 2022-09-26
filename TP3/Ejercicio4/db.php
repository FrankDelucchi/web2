<?php

function getPagos(){
    $db = new PDO('mysql:host=localhost;'.'dbname=db_pagos;charset=utf8', 'root', '');
    $sentencia = $db->prepare( "SELECT * FROM pagos");
    $sentencia->execute();
    $pagos = $sentencia ->fetchAll(PDO::FETCH_OBJ);
    
    return $pagos;
}