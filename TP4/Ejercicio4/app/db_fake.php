<?php

function getProductosLimpieza() {
    $p1 = new stdClass();
    $p1->name = "lavandina";
    $p1->precio = "200";
    $p1->text = "Hipoclorito de sodio. Leer instrucciones en el rotulo";

    $p2 = new stdClass();
    $p2->name = "detergente";
    $p2->precio = "400";
    $p2->text = "magistral";

    $p3 = new stdClass();
    $p3->name = "acido";
    $p3->precio = "2000";
    $p3->text = "PELIGROSO. Mantener alejado del alcance de los niños y mascotas";

    $p4 = new stdClass();
    $p4->name = "trapo";
    $p4->precio = "50";
    $p4->text = "100% algodon";

    $productosLimpieza = [$p1, $p2, $p3, $p4];
    return $productosLimpieza;
}


