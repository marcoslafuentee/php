<?php



session_start();

$opciones = $_POST['submit'] ?? null;
switch ($opciones){
    case "Establecer":
        $nombre = $_POST['nombre'];
        $valor = $_POST['valor'];
        $_SESSION[$nombre]=$valor;
        break;

    case "Ver":


}


?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contador de visitas</title>
    </head>
    <body>

    <?php if($opciones==['Ver']): ?>


    <?php else: ?>
        <form method="post" action="crearVer.php">
            nombre <input type="text" name="nombre" id=""><br>
            valor <input type="text" name="valor" id=""><br>

            <input type="submit" value="Establecer" name="submit">
            <input type="submit" value="Ver" name="submit">
        </form>
    <?php endif ?>






    </body>
    </html>
<?php
