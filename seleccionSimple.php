<?php


$numRandom = rand(0, 100);

$numero = $a ?? $b ?? $c ;

if (($numRandom%2) == 0 ){
    echo "<h2>Has ganado un premio</h2>";
    echo "<h2>Tu número es el $numRandom</h2>";
}else{
    echo "<h2>Tu número es el $numRandom</h2>";
}