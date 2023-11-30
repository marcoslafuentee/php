<?php

require "vendor/autoload.php";
use Jugada\Jugada;
use Jugada\Clave;
use Jugada\Plantilla;

session_start();

$ver_ocultar_numero = "Ver Clave";

$clave = Clave::obtener_clave();

$opcion = $_POST['submit'] ?? null;
switch ($opcion){
    case "Ver Clave":
        $msj = Plantilla::get_clave();
        $ver_ocultar_numero = "Ocultar Clave";
        break;
    case "Ocultar Clave":
        $ver_ocultar_numero = "Ver Clave";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">


    Inserta número<input type="text" name="numero" id=""><br>
    <input type="submit" value="Jugar" name="submit">
    <input type="submit" value="Reiniciar" name="submit">
    <input type="submit" value="<?=$ver_ocultar_numero ?> " name="submit">
    <?php var_dump($msj); ?>
</form>
</body>
</html>
