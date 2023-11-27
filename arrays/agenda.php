<?php


$agenda = isset($_POST['agenda']) ? unserialize($_POST['agenda']) : [];

if ($agenda === false) {
    // Hubo un error al deserializar
    echo "Error al deserializar el valor de 'agenda'.";
} else {
    // El valor de 'agenda' se deserializó correctamente o es un array vacío
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Recuperamos datos del formulario
        $nombre = htmlspecialchars(filter_input(INPUT_POST, 'nombre'));
        $telefono = htmlspecialchars(filter_input(INPUT_POST, 'telefono'));


        function valida_datos($agenda, $nombre, $telefono){
            //Verificamos si el nombre esta vacío
            if (empty($nombre)){
                return "Error: el nombre no puede estar vacío";
            }

            //Verificamos que el teléfono no sea numérico
            if (!is_numeric($telefono)){
                return "Error: El teléfono debe ser un valor numérico.";
            }

            // Verificamos si el nombre ya existe en la agenda
            if (!array_key_exists($nombre, $agenda) && !empty($telefono)) {
                // Si el nombre no existe y el teléfono no está vacío, añadimos a la agenda
                $agenda[$nombre] = $telefono;
                return null; // No hay errores
            } elseif (array_key_exists($nombre, $agenda)) {
                return "Error: El nombre ya existe en la agenda";
            }

            return null;
        }

        if (isset($_POST['anadir'])){
            $error = valida_datos($agenda, $nombre, $telefono);
            if ($error==null){
                imprimeAgenda($agenda);
            } else {
                echo ($error);
            }
        }

        if (isset($_POST['eliminar'])){
           unset($agenda);
        }



    } else {
        echo "Error: no se recibieron los datos del formulario";
    }

}

//$agenda = unserialize($_POST['agenda']??[]);








?>
<!DOCTYPE html>
<html>
<head>
    <title>Clicks</title>
</head>
<body>

    <h1>Agenda</h1>

    <form method="post" action="agenda.php">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"> <br>

        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" id="telefono"> <br>


        <input value="Anadir" name="anadir" type="submit">
        <input value="ElminarTodos" name="eliminar" type="submit">
    </form>

    <hr><hr>

    <?php
    function imprimeAgenda($agenda){
        foreach ($agenda as $nombre => $telefono) {
            return "<label>Nombre: $nombre</label><br><label>Teléfono: $telefono</label><br><br>";
            //echo "<label>Nombre: $nombre</label><br>";
            //echo "<label>Teléfono: $telefono</label><br><br>";
        }
        return null;
    }
    ?>




</body>
</html>