<?php
if(empty($_POST['nombre'])||empty($_POST['apellido'])||empty($_POST['edad'])){
    echo "No completo todos los campos!";
}else{
    $usuario = $_POST['nombre']." ". $_POST['apellido'];
    $edad = $_POST['edad'];
    echo $usuario;
    echo " ".$edad;
}