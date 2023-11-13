<?php


$pre = "Pero que tal estás ";

function saludo($msj){
    global $pre;
    $msj = $msj."mas texto";
    echo $pre.$msj;
}

saludo("Marcos");

$saludo = fn($msj)=> $msj;

echo $saludo ("que tal estas");

$saludo = function ($msj) use (&$pre){
    return ($pre.$msj);
};



echo "<h2>texto de la funcion</span></h2>";