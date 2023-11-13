<?php

$edad = rand(0, 100);

switch (TRUE) {
    case (($edad >= 0) and ($edad <= 3)):
        $msj = "eres un bebe";
        break;
    case (($edad >= 4) and ($edad <= 11)):
        $msj = "eres un niño";
        break;
    case (($edad >= 12) and ($edad <= 18)):
        $msj = "eres un adolescente";
        break;
    case (($edad >= 19) and ($edad <= 25)):
        $msj = "eres un jóven";
        break;
    case (($edad >= 26) and ($edad <= 65)):
        $msj = "eres un adulto";
        break;
    case (($edad >= 66) and ($edad <= 100)):
        $msj = "eres un anciano";
        break;
}



echo "<h2>Edad $edad</h2>";
echo "<h2>$msj</h2>";



$iepaa = "a";

printf("esto es una cadena %c", $iepaa);





$letra = "a";
$cadena = "esto es una cadena de caracteres";
if (strpos ($cadena, $letra)){
    echo "<h2>Si está $letra</h2>";
}else{
    echo "<h2>No está $letra</h2>";
}