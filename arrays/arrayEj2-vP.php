<?php

require "funciones.php";

$productos = [
    'lechuga' => ['unidades' => 200,
        'precio' => 0.90],
    'tomates' =>['unidades' => 2000,
        'precio' => 2.15],
    'cebollas' =>['unidades' => 3200,
        'precio' => 0.49],
    'fresas' =>['unidades' => 4800,
        'precio' => 4.50],
    'manzanas' =>['unidades' => 2500,
        'precio' => 2.10],
];
$formulario = crea_formulario($productos);



if (isset($_POST['submit'])){
    $factura = genera_factura($productos);
    $inventario = obtener_inventario($productos);

}else {
    $formulario = crea_formulario($productos);
}


?>



<!DOCTYPE html>
<html>
<head>
    <title>Tienda de Verduras</title>
</head>
<body>
<fieldset>
    <h1>Tienda de verduras</h1>
    <?php if (!isset($_POST['submit'])): ?>

        <form method="post" action="arrayEj2-vP.php">
            <?= $formulario ?>
            <input value="Comprar" name="submit" type="submit">
        </form>
    <?php else:
            echo $factura;
            echo $inventario;
    endif;
    ?>
</fieldset
</body>
</html>
