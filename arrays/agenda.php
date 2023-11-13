<?php
$agenda = unserialize($_POST['agenda']??[]);

$nombre = htmlspecialchars(filter_input(INPUT_POST, 'nombre'));
$telefono=htmlspecialchars(filter_input(INPUT_POST, 'telefono'));

$error = valida_datos($agenda, $nombre, $telefono);
if ($error==null){

}
    //agrega, borra o actualiza



?>
<!DOCTYPE html>
<html>
<head>
    <title>Clicks</title>
</head>
<body>

    <h1>Agenda</h1>

    <form method="post" action="contadorClicks.php">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"> <br>
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" id="telefono"> <br>

        <input value="Anadir" name="submit" type="submit">
        <input value="ElminarTodos" name="submit" type="submit">

    </form>






</body>
</html>