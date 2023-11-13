<?php







//if (isset($_POST['intentos'])) {
//    $intentos = $_POST['intentos'];
//}
//$min = 1;
//if ($intentos= 10){
//    $max = 1024;
//}else if($intentos=16){
//    $max = 65536;
//}else if($intentos=20){
//    $max = 1048576;
//}
//$numero_generado = round(($min+$max)/2);
//$jugada=0;

//var_dump($_POST);

//Leemos la opcion que nos ha traido aqui
$opcion = $_POST['submit'] ?? null;

//Genero unos valores iniciales
$intentos = $_POST['intentos'];
//TODO
//necesito guardar este valor en formularios

//Establezco unas opciones de codigo por defecto
$checked_mayor=$_POST['intentos']?? "checked";
$checked_menor=$_POST['intentos']?? "";

//Esto es un modo de controlar el routeo
switch ($opcion){
    case "Reiniciar":
    case "Empezar": //Inicia valores
        $min=0;
        $jugada=1;
        $intentos= filter_input(INPUT_POST, 'intentos');
        $max = 2**$intentos;
        $numero_generado = ($min + $max)/2;
        //Vengo del index
        break;
    case "Jugar":
        $jugada = $_POST['jugada'];
        $numero_generado = $_POST['numero_generado'];
        $intentos = $_POST['intentos'];
        $max =  $_POST['max'];
        $min =  $_POST['min'];

        $op= $_POST['operador'];
        switch ($op){
            case "<":
                $max = $_POST['numero_generado'];
                $checked_menor = "checked";
                $checked_mayor ="";

            case ">":
                $min = $_POST['numero_generado'];
                $checked_menor = "";
                $checked_mayor = "checked";
            case "=":
                $fin = true;
        }

        $numero_generado = ($min + $max)/2;
        $jugada++;

        //final juego
        if (($jugada > $intentos) || ($fin == true) ){
            header("location:fin.php?jugada =$jugada");
            exit();
        }


        break;
        //Estoy en la jugada 2
    case "volver":
        header("Location:index.php?intentos");
        exit();

}

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


    <form method="post" action="jugar.php">
        <h3>El número es <?= $numero_generado ?> ?</h3>
        <h5>Jugada <span style="..."><?= $jugada ?></span></h5>
        <h5>Actualmente te quedan  <span style="..."><?= $intentos - $jugada ?></span></h5>


        <input type="radio" name="operador" value=">">El número es mayor <br>
        <input type="radio" name="operador" value="<">El número es menor <br>
        <input type="radio" name="operador" value="=">Este es el número <br>




        <!-- guardo valores para siguientes jugadas -->
        <input type="hidden" name="min" value="<?=$min?>">
        <input type="hidden" name="max" value="<?=$max?>">
        <input type="hidden" name="intentos" value="<?=$intentos?>">
        <input type="hidden" name="jugada" value="<?=$jugada?>">
        <input type="hidden" name="numero_generado" value="<?=$numero_generado?>">



        <input type="submit" value="Jugar" name="submit">
        <input type="submit" value="Reiniciar" name="submit">
        <input type="submit" value="volver" name="submit">
    </form>



</body>
</html>

