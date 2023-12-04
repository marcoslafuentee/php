<?php


//Para que muestre todos los errores por navegador
ini_set("display_errors", true);
error_reporting(E_ALL);

$carga = fn()=> require ("clases\Clave.php");
spl_autoload_register($carga);

//Ahora empezamos a trabajar con sesiones
session_start();

//busca una clave o la genera
$clave = Clave::obtener_clave();

$ver_ocultar_clave= "Mostrar clave";


$opcion = $_POST['submit']?? null;

switch ($opcion){
    case "Jugar":
        header("Location:jugar.php");
        exit();
    case "Ver clave":
        $stringClave = Clave::toString();
        $msj = "La clave es <div class='resaltado'>$stringClave</div>";
        $ver_ocultar_clave = "Ocultar clave";
        break;

    case "Ocultar clave":
        $ver_ocultar_clave = "Ver clave";
        break;

    case "Resetear clave":
        $clave = Clave::regenerar_clave();
        $msj = "Se ha reestablecido el juego";
        break;

    default:
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
                        <h3>Selecciona 4 colores para jugar</h3>
                        <select onchange="cambia_color(0)"></select>
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
