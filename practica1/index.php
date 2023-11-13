<?php
$checked_10=$_POST['intentos']?? "checked";
$checked_16=$_POST['intentos']?? "";
$checked_20=$_POST['intentos']?? "";
//para dejar una opción seleccionada

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Juego</title>
</head>
<body>
    <h2>Juego adivina número</h2>

    <h3>Selecciona un intervalo del menú de abajo</h3>

    <form method="post" action="jugar.php">
        <select  name= "intentos">
            <option value="10">1-1.024(2¹⁰). 10 intentos</option>
            <option value="16">1-65.536(2¹⁶). 16 intentos</option>
            <option value="20">1-1.048.576(2²⁰). 20 intentos</option>
        </select>
        <br>
        <input type="submit" value="Empezar" name="submit">
    </form>


    <h3>Piensa un número de ese intervalo</h3>
    <h3>La aplicación lo acertará en el número de intentos establecidos según el intervalo</h3>
    <h3>Cada vez que la aplicación te especifique un número deberás de indicar</h3>


</body>
</html>