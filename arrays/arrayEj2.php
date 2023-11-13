<?php

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

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tienda de Verduras</title>
</head>
<body>
<fieldset>>
    <h1>Tienda de verduras</h1>

    <h2>Productos disponibles:</h2>
    <form method="post">
        <?php  foreach ($productos as $producto => $informacion):?>
            <?php if ($informacion['unidades'] > 0 ): ?>
                <p>
                    <input type="radio" name="producto" value="<?= $producto ?>"> <?= $producto?> <br>

                </p>
            <?php endif; ?>
        <?php endforeach; ?>
    </form>





</fieldset
</body>
</html>