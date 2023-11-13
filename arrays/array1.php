<?php

//Array asociativo
$modulos= array("PR" => "Programación",
                "BD" => "Bases de datos",
                "DWES" => "Desarrollo web en entorno servidor");

//Creacion arrays
$modulos2 = [1, 4 ,57, 6, 9 ];


//Añadir elementos a array
$modulos2[] = 33; //ultima posicion por defecto
$modulos2[15] = 34; //elegir posición


//Eliminar elemento
unset($modulos2[15]);

//contar elementos
$size = count($modulos2);
var_dump($size);

//Mostrar una posición
echo "valor de la posicion 0 es $modulos2[0]";

//Recorrer arrays
foreach ($modulos2 as $indice => $valor){ //con &$valor lo referencias y haces que cambie el valor
    $valor++; //no modificas array, solo la variable
    echo "<h2>Posición $indice - $valor </h2>";
}

//Rellenar un array
$modulos2 = array_fill(0, 20, 0);//todos el mismo valor

$rellenar = fn()=>rand(1,10);
$cuadrados = fn($num) => $num**2;

$modulos2  = array_map($rellenar, $modulos2);//aplica la funcion a cada uno de los elementos
$modulos2_cuadrado= array_map($cuadrados, $modulos2);

//Visualizar array
var_dump($modulos);
var_dump($modulos2);
var_dump($modulos2_cuadrado);







//Arrays asociativos
$capitales = ["España"=>"Madrid",
                "Francia"=>"París",
                "Portugal"=>"Lisboa"];

//Recorrer array
foreach ($capitales as $pais => $capital){
    echo "<h2>La capital de $pais es $capital</h2>";
}

$n=0;
foreach ($capitales as $pais =>$capital){
    echo "La capital de la posición $n del país $pais  es $capital<br />";
    $n++;
}



//Recorrer array complejo
$productos = [
    'lechugas'=>  ['precio' => 100, 'unidades'=>50],
    'manzanas'=>  [ 'precio' => 200, 'unidades'=>100],
    'peras'=>  [ 'precio' => 300, 'unidades'=>150],
    'tomates'=>  [ 'precio' => 400, 'unidades'=>200],
    'cebollas'=>  ['precio' => 500, 'unidades'=>25],
];

foreach ($productos as $alimento => $producto) {
    echo "<h2>$alimento, unidades: {$producto['unidades'] } precio : {$producto['precio']}  </h2>";
    $productos[$alimento]['precio'] *= 1.25;


}

foreach ($productos as $producto=>$datos){
    $precio = $datos['precio'];
    $unidades = $datos['unidades'];
    echo "<h3>producto $producto precio $precio unidades $unidades</h3>";
}
