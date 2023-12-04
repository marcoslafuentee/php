<?php


session_start();

//Falta crear jugada y manejar los resultados
$jugada = new Jugada()


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
    <div class="contenedorJugar">
        <div class="opciones">
            <h2>OPCIONES</h2>
            <fieldset>
                <legend>Acciones posibles</legend>
                <form action="jugar.php" method="post">
                    <input type="submit" value="Ver clave" name="submit">
                    <input type="submit" value="Resetear clave" name="submit">
                </form>
            </fieldset>
            <fieldset>
                <legend>Menú jugar</legend>
                <form action="jugar.php" method="post">
                    <div class="group_select">
                        <h3>Jugada realizada, vuelve a seleccionar para jugar</h3>
                        <select onchange="cambia_color(0)" class="" name="">

                        </select>
                        <select onchange="cambia_color(1)"></select>
                        <select onchange="cambia_color(2)"></select>
                        <select onchange="cambia_color(3)"></select>
                    </div>
                    <input type="submit" value="Jugar" name="submit">
                </form>
            </fieldset>
        </div>
        <fieldset class="informacion">
            <?=$msj ??""?>
        </fieldset>
    </div>
</body>
</html>
