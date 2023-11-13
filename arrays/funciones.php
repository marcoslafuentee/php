<?php

function crea_formulario( array $tienda):string{
    $formulario = "";

    foreach ($tienda as $producto => $detalle){
        $formulario .= "<label for = '$producto'>$producto</label>";
        $formulario .= "( a {$detalle['precio']} €)";
        $formulario .= "<input type=text name=$producto  id=$producto ><br>";

    }

    return $formulario;
}


function genera_factura($productos):string{
    $factura ="";
    $total = 0 ;
    foreach ($productos as $producto => $detalle){
        $unidades = filter_input(INPUT_POST, $producto, FILTER_VALIDATE_INT);
        $stock = $detalle['unidades'];
        $unidades = $unidades>$stock? $stock: $unidades;
        $precio = $detalle['precio'];
        $subtotal = $precio*$unidades;
        $total += $subtotal;
        $factura .= "$unidades de $producto a $precio = $subtotal € <br>";

        //$factura .= "El coste de " + $producto + " es " + $producto['unidades'] * $producto['precio'];
    }
    $factura .= "<h1> Total = $total</h1>";
    return $factura;

}


function obtener_inventario($productos):string{
    $informe ="";



    return $informe;
}

