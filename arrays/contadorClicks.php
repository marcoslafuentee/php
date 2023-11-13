<?php


$accesos = $_POST['accesos']??[];

if (isset($_POST['submit'])){



    $nombre = $_POST['nombre'];



   /*
   if (isset($accesos[$nombre])){
        $accesos[$nombre]++;
    }else{
        $accesos[$nombre]= 1;
    }
   */

    $accesos[$nombre] = (isset($accesos[$nombre]))? ++$accesos[$nombre]: 1;

    $msj ="";
    foreach ($accesos as $nombre => $nClick){
        $msj.=  "<h2>$nombre ha realizado $nClick clicks</h2>";
    }
}



?>


<!DOCTYPE html>
<html>
<head>
    <title>Clicks</title>
</head>
<body>

    <h1>Clicks</h1>
    <?= $msj ?? ""?>

    <form method="post" action="contadorClicks.php">
        <input type=text name="nombre"  id="nombre" ><br>
        <input value="Click-me" name="submit" type="submit">

        <?php
        //echo "<input type='hidden' name='accesos' value='$accesos_serializados'>"\n

        foreach ($accesos as $nombre => $nClick){
            echo "<input type='hidden' name='accesos[$nombre]' value='$nClick'>";
        }

        ?>
    </form>






</body>
</html>

