<?php
    if(empty($_POST['peso'])||empty($_POST['altura'])){
        echo "<p>Los parametros ingresados no son validos</p>";
    }else{
        $peso = intval($_POST['peso']);
        $altura = intval($_POST['altura']);

        $imc = $peso/($altura*$altura);
        $parrafo = "Su indice de masa corporal es ";
        $parrafo1 = "USted se encuentra con peso bajo ";
        $parrafo2 = "USted se encuentra con peso normal ";
        $parrafo3 = "USted se encuentra con sobrepeso ";
        $parrafo4 = "USted se encuentra con obesidad ";
        echo "<p>" .$parrafo. $imc . "</p>";
        if($imc<18.5){
            echo "<p>" .$parrafo1. "</p>";
        }else if($imc>=30){
            echo "<p>" .$parrafo4. "</p>";
        }else if($imc>=25){
            echo "<p>" .$parrafo3. "</p>";
        }else{
            echo "<p>" .$parrafo2. "</p>";
        }
    }
    
    