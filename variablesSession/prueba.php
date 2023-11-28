<?php

session_start();

if (isset($_POST['submit'])&& $_POST['submit']=="Restart"){
    session_destroy();
    session_start();
}

$opcion = $_POST['submit'];

$accesos = $_SESSION['accesos'] ?? 0;
$accesos++;

$vez = $accesos==1? "vez":"veces";
$msj = "Has accedido a esta página $accesos $vez";
$_SESSION['accesos'] = $accesos;



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
<?= $msj ??"" ?>
<form method="post" action="prueba.php">
    <input type="submit" value="Click me" name="submit">
    <input type="submit" value="Restart" name="submit">

</form>

</body>
</html>
