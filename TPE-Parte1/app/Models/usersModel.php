<?php

class usersModel{
    
    private $db;
    
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe_parte1;charset=utf8', 'root', '');
    }

    //Devuelve datos del usuario que quiere loguearse
    function checkInfo($user){

        $query = $this->db->prepare('SELECT * FROM users WHERE nombre_usuario = ?');
        $query->execute([$user]);
        $user = $query->fetch(PDO::FETCH_OBJ);

        return $user;
    }
}