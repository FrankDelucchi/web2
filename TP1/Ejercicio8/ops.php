<?php

function suma($valor1, $valor2){
    return $valor1+$valor2;
}
function resta($valor1, $valor2){
    return $valor1-$valor2;
}
function producto($valor1, $valor2){
    return $valor1*$valor2;
}
function cociente($valor1, $valor2){
    if($valor2!=0){
        return $valor1/$valor2;
    }else{
        echo "No se puede dividir por 0";
    }
    
}