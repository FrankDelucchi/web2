<?php

require_once 'db.php';

function listarPagos(){
    $pagos = getPagos();

    for ($i = 0; $i<count($pagos); $i++){
        echo"<tr>";
            
                echo "<th>" .$pagos[$i] ->deudor. "</th>";
                echo "<th>" .$pagos[$i]->cuota. "</th>";
                echo "<th>" .$pagos[$i]->cuota_capital. "</th>";
                echo "<th>" .$pagos[$i]->fecha_pago. "</th>";  
            
        echo"</tr>";
    }
}