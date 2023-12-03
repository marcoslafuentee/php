<?php
//Primero cargamos autoload de composer
//require "vendor/autoload.php";

//Para que muestre todos los errores por navegador
ini_set("display_errors", true);
error_reporting(E_ALL);

//Ahora empezamos a trabajar con sesiones
session_start();

//acceso a las clases
use jugadas\Clave;
use jugadas\Jugada;
use jugadas\Plantilla;

//busca una clave o la genera
$clave = Clave::obtener_clave();

$ver_ocultar_clave= "Mostrar clave";

$opcion = $_POST['submit']?? null;

switch ($opcion){
    case "Jugar":
        $jugada = new Jugada(htmlspecialchars($_POST['numero']));

        $_SESSION['jugadas'][]=serialize($jugada);
        $numero_jugada = sizeof($_SESSION['jugadas']);

        if (($jugada->get_resultado()==0) || ($numero_jugada>10)){
            header("Location:fin.php");
            exit();
        }

        $msj = Plantilla::obtener_informe_jugada($jugada);

        break;

    case "Ver clave":
        $msj = "La clave es <div class='resaltado'>$clave</div>";
        $ver_ocultar_clave = "Ocultar clave";
        break;

    case "Ocultar clave":
        $ver_ocultar_clave = "Ver clave";
        break;

    case "Reiniciar":
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

    <fieldset class="juego">
        <legend>Opciones del juego</legend>
        <form action="index.php" method="post">
            <label for="numero">Inserta un número</label>
            <input type="text" name="numero" id="">
            <input type="submit" value="Jugar" name="submit">
            <input type="submit" value="Reiniciar" name="submit">
            <input type="submit" value="<?=$ver_ocultar_clave?>" name="submit">
        </form>
    </fieldset>
    <div class="informacion">
        <?=$msj ??""?>
    </div>

</body>
</html>
