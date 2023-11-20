<?php

if (isset($_POST['submit'])){

    $expresion_regular = $_POST['expresion_regular'];
    $cadena = $_POST['cadena'];
    $expresion = "#$expresion_regular#";
    $msj = preg_match($expresion, $cadena)? "$cadena cumple $expresion_regular": "$cadena NO cumple $expresion_regular";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<fieldset style="width: 40%; background-color">


<form action="index.php" method="post">
    Expresion regular <input type="text" value="<?= $expresion_regular ?? "" ?>"> <br>
    Cadena <input type="text" name="cadena" value="<?= $cadena ?? "" ?> " id=""><br>
    <input type="submit" value="Validar" name="submit" id="" />

</form>

    <?= $msj ?>
</fieldset>
</body>
</html>