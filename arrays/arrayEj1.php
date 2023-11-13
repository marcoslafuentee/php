<?php
$notas = [];
$notas = array_fill(0, 9, 0);//todos el mismo valor

$rellenar = fn()=>rand(1,10);

$notas = array_map($rellenar, $notas);


var_dump($notas);


$mayor = $notas[0];
$menor = $notas[0];
$suma = 0;

$mayor = max($notas);

$menor = min($notas);



foreach ($notas as $nota){
    $mayor = ($nota > $mayor)? $nota: $mayor;
    $menor = ($nota < $menor)? $nota: $menor;
    $suma += $nota;

}

echo "<h2>La nota mayor es $mayor </h2>";
echo "<h2>La nota menos es $menor</h2>";
