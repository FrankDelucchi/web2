<?php
require_once('ops.php');
if(empty($_GET['numero1']) || empty($_GET['numero2'])){

    echo "campos vacios";
}else{
    $valor1 = $_GET['numero1'];
    $valor2 = $_GET['numero2'];
    $calculo = $_GET['operacion'];  
    
    switch($calculo){
        case 'sumar':{
            echo suma($valor1, $valor2) ;
            break;
        }
    
        case 'restar':{
            echo resta($valor1, $valor2);
            break;
        }
    
        case 'multiplicar':{
            echo producto($valor1, $valor2);
            break;
        }
    
        case 'dividir':{
            echo cociente($valor1, $valor2);
            break;
        }
    }
}    
    



