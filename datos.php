<?php
//Leemos los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$genero = $_POST['genero'];
$estudios = $_POST['estudios'];
$idiomas = $_POST['idiomas'];




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
<h1>Datos Personales</h1>
<h2>Nombre  <?=$nombre?> </h2>
<h2>Apellido  <?=$apellido?> </h2>
<h2>Genero  <?=$genero?> </h2>
<h2>Estudios  <?=$estudios?> </h2>
<h2>Idiomas: </h2>
<?php
foreach ($idiomas as $idioma)
    echo "<h3>&nbsp&nbsp$idioma</h3>"

?>


</body>
</html>

