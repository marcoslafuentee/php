<?php




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


<form action="accion.php" method="post">
    <p>Su nombre: <input type="text" name="nombre" /></p>
    <p>Su edad: <input type="text" name="edad" /></p>
    <p><input type="submit" /></p>



    Hola <?php echo htmlspecialchars($_POST['nombre']); ?>.
    Usted tiene <?php echo (int)$_POST['edad']; ?> años.
</form>

</body>
</html>