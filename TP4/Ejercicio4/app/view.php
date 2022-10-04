<?php
require_once 'libs/smarty/libs/Smarty.class.php';

class view{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showHome($listaProductos){
        //var_dump($listaProductos);
        echo "<ul>";
            foreach ($listaProductos as $item){
                echo "<li><a href='producto'>".$item->name."</a></li>";
            }
        echo "</ul>";
        }
    /**function showProducto($listaProductos){
        echo "<ul>";
            foreach ($listaProductos as $item){
                echo "<li>" .$item->precio . "</li>";
                echo "<li>" .$item->text . "</li>";
            }
        echo "</ul>";
     
        
    }**/
}